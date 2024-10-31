<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\SendVerificationCode;
use App\Mail\StoreCreated;
use App\Models\City;
use App\Models\Country;
use App\Models\CustomTenantModel;
use App\Models\Language;
use App\Models\RoleVendor;
use App\Models\Template;
use App\Models\TemplateCategory;
use App\Models\Tenant\StoreSettings;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Validator;
use Spatie\Permission\Models\Role;
use Exception;

class StoreController extends Controller
{

    public function showStep1()
    {
        return view('main.pages.create-store-1');
    }

    public function firstStep(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|min:6',
            'phoneCode' => 'required',
            'mobileNumber' => [
                'required',
                'numeric',
                'digits:10',
                Rule::unique('vendors', 'mobile')->where('phone_code', $request->phoneCode),
            ],
            'email' => 'required|email|unique:vendors,email',
            'password' => [
                'required',
                Password::min(8)->letters()->mixedCase()->numbers()->symbols(),
            ],
            'password_confirmation' => 'required|same:password',
            'terms' => 'required|accepted',
        ], [
            'terms.required' => __('main.must-select-accept-terms'),
            'mobileNumber.unique' => __('main.phone-number-unique'),
            'password.letters' => __('main.password-must-contain-letters'),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        // Generate a unique secret key
        $secretKey = Str::uuid()->toString();

        // Store the validated data and verification code in a file
        $sessionData = [
            'secretKey' => $secretKey,
            'storeCreation-Step1' => $validatedData,
            'verificationCode' => $this->generateCodeNotifi(),
        ];

        // Store data in a file
        Storage::put("sessions/{$secretKey}.json", json_encode($sessionData));

        // Save secret key in session
        session(['secretKey' => $secretKey]);
        // Send verification code email
        Mail::to($validatedData['email'])->send(new SendVerificationCode($sessionData['verificationCode']));

        return redirect()->route('main.create-store-2');
    }


    private function generateCodeNotifi()
    {
         return rand(1000, 9999);
        //return 0000;
    }

    public function showStep2()
    {
        $secretKey = session('secretKey');

        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }

        // Retrieve data from the file
        $sessionData = json_decode(Storage::get("sessions/{$secretKey}.json"), true);
        $mobile = $sessionData['storeCreation-Step1']['mobileNumber'];

        return view('main.pages.create-store-2', ['mobile' => $mobile]);
    }


    public function secondStep(Request $request)
    {
        $validator = Validator($request->all(), [
            'verificationCodeInput' => 'required|array|size:4',
            'verificationCodeInput.*' => 'required|numeric|digits:1',
        ], [
            'verificationCodeInput.*.required' => __('main.verification_required'),
            'verificationCodeInput.*.numeric' => __('main.verification_numeric'),
            'verificationCodeInput.*.digits' => __('main.verification_digits'),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->getMessageBag())->withInput();
        }

        $verificationCodeInput = implode('', $request->input('verificationCodeInput', []));
        $secretKey = session('secretKey');

        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }

        $sessionData = json_decode(Storage::get("sessions/{$secretKey}.json"), true);
        if ($verificationCodeInput == $sessionData['verificationCode']) {
            return redirect()->route('main.create-store-3');
        } else {
            return redirect()->back()->withErrors(['verificationCode' => __('main.wrong-verification-code-input')])->withInput();
        }
    }


    public function showStep3()
    {
        $secretKey = session('secretKey');

        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }
        $countries = Country::all(['id', 'name']);
        $templates = Template::all();
        $languages = Language::all(['id', 'lang']);
        $categories = TemplateCategory::all(['id', 'name']);

        return view('main.pages.create-store-3', compact('countries', 'templates', 'languages', 'categories'));
    }

    public function getCitiesByCountry($countryId)
    {
        $cities = City::where('country_id', $countryId)->get(['id', 'name']);
        return response()->json(['cities' => $cities]);
    }

    public function thirdStep(Request $request)
    {
        $validator = Validator($request->all(), [
            'storeName' => 'required|string|min:3',
            'storeDomain' => 'required|unique:landlord.tenants,domain|string|min:3',
            'countryId' => 'required|exists:countries,id',
            'cityId' => 'required|exists:cities,id',
            'languageId' => 'required|exists:languages,id',
            'templateCategoryId' => 'required|exists:template_categories,id',
            'currentlySell' => 'required|string|in:online,physical,both',
            'manyProductHave' => 'required|string|in:50-500,501-1000,1001-3000,3001-more',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->getMessageBag())->withInput();
        }
        $data = $validator->validated();

        $secretKey = session('secretKey');
        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }

        // Get existing session data
        $sessionData = json_decode(Storage::get("sessions/{$secretKey}.json"), true);

        // Add new data to the existing session data
        $sessionData['storeCreation-Step3'] = $data;

        // Store the updated data back in the session and file
        Storage::put("sessions/{$secretKey}.json", json_encode($sessionData));
        session()->put('storeCreation-Step3', $data);


        return redirect()->route('main.create-store-4');
    }

    public function showStep4()
    {
        $secretKey = session('secretKey');

        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }

        $templateCategories = TemplateCategory::with(['templates' => function($query) {
            $query->where('is_free', 1);
        }])
            ->where('appear_on_home', 1)
            ->orderBy('sort')
            ->get();


        return view('main.pages.create-store-4', compact('templateCategories'));
    }

    public function fourthStep(Request $request)
    {
        $validator = Validator($request->all(), [
            'templateId' => 'required|exists:templates,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->getMessageBag())->withInput();
        }
        $data = $validator->validated();

        $secretKey = session('secretKey');
        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }

        // Get existing session data
        $sessionData = json_decode(Storage::get("sessions/{$secretKey}.json"), true);

        // Add new data to the existing session data
        $sessionData['storeCreation-Step4'] = $data;

        // Store the updated data back in the session and file
        Storage::put("sessions/{$secretKey}.json", json_encode($sessionData));
        session()->put('storeCreation-Step4', $data);

        try {
            return DB::transaction(function () use ($secretKey, $sessionData) {
                $vendor = $this->createVendor();
                $tenant = $this->createTenantVendorDB($vendor);
                $this->setUpTenantDB($tenant, $vendor);
                $this->setUpSettingStore($vendor);
                Log::info('Store creation successful for vendor ID ' . $vendor->id);

                // Send email with data from the session or file
                try {
                    Mail::to($sessionData['storeCreation-Step1']['email'])
                        ->send(new StoreCreated($vendor, $sessionData['storeCreation-Step3']['currentlySell'], $sessionData['storeCreation-Step3']['manyProductHave'], TemplateCategory::find($sessionData['storeCreation-Step3']['templateCategoryId'])));
                } catch (\Exception $e) {
                    Log::error('Email sending failed: ' . $e->getMessage());
                    return view('main.pages.create-store')->withErrors('Email sending failed. Please try again.');
                }

                // Delete the session data and file
                session()->forget(['secretKey', 'storeCreation-step3', 'storeCreation-Step4']);
                Storage::delete("sessions/{$secretKey}.json");
                DB::commit();
                return view('main.pages.store-created-successfully');

            });

        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Store creation failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Store creation failed. Please try again.');
        }
    }

    private function createVendor()
    {
        $secretKey = session('secretKey');

        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }
        $sessionData = json_decode(Storage::get("sessions/{$secretKey}.json"), true);

        $data1 = $sessionData['storeCreation-Step1'];
        $data3 = $sessionData['storeCreation-Step3'];
        $vendor = new Vendor();
        $vendor->full_name = $data1['name'];
        $vendor->email = $data1['email'];
        $vendor->password = Hash::make($data1['password']);
        $vendor->phone_code = $data1['phoneCode'];
        $vendor->mobile = $data1['mobileNumber'];
        $vendor->country_id = $data3['countryId'];
        $vendor->city_id = $data3['cityId'];
        $vendor->status = 1;
        $vendor->is_verified = 1;
        $vendor->save();
        $vendor->assignRole(Role::where('name', 'Super Vendor')->first());
        return $vendor;
    }

    private function createTenantVendorDB($vendor)
    {
        $secretKey = session('secretKey');

        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }

        $sessionData = json_decode(Storage::get("sessions/{$secretKey}.json"), true);

        $data = $sessionData['storeCreation-Step3'];

        $passwordDB = Str::random(10);

        $tenant = CustomTenantModel::create([
            'name' => 'tenant_' . $vendor->id,
            'domain' => $data['storeDomain'],
            'database' => 'tenant_' . $vendor->id . '_db',
            'username' => 'tenant_user_' . $vendor->id,
            'password' => $passwordDB,
            'vendor_id' => $vendor->id,
        ]);

        try {
            $isCreated = DB::statement("CREATE DATABASE $tenant->database CHARACTER SET utf8 COLLATE utf8_general_ci");
            if (!$isCreated) {
                throw new Exception('Create user database error');
            }
            $isCreatedUser = DB::statement("CREATE USER '$tenant->username'@'localhost' IDENTIFIED BY '$tenant->password'");
            if (!$isCreatedUser) {
                throw new Exception('Create user database error');
            }
            $isGrant = DB::statement("GRANT ALL PRIVILEGES ON $tenant->database.* TO '$tenant->username'@'localhost'");
            if (!$isGrant) {
                throw new Exception('Grant privileges to user error');
            }
            return $tenant;
        } catch (Exception $e) {
            DB::statement("DROP DATABASE IF EXISTS $tenant->database");
            DB::statement("DROP USER IF EXISTS '$tenant->username'@'localhost'");
            Log::error("Failed to create tenant database or user: " . $e->getMessage());
            throw $e;
        }
    }

    private function setUpTenantDB($tenant, $vendor)
    {
        $connection = $this->setConnection($tenant);
        if (!$connection) {
            throw new Exception('Error Connection Tenant');
        }
        $this->migrateDB();


        //generate oauth client
        $saved = DB::connection('tenant')->table('oauth_clients')->insert([
            [
                'id' => 1,
                'user_id' => null,
                'name' => 'Laravel Personal Access Client',
                'secret' => '2Tuk1QYi3iOIaJ1md765CIRx373QSxEdXOJ0jl6p',
                'provider' => null,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2023-10-03 07:16:58',
                'updated_at' => '2023-10-03 07:16:58',
            ],
            [
                'id' => 2,
                'user_id' => null,
                'name' => 'Laravel Password Grant Client',
                'secret' => '6yqyegrPNjDuskjfmls5BjgqOIMN1SAvNv7725K9',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2023-10-03 07:16:58',
                'updated_at' => '2023-10-03 07:16:58',
            ],
            [
                'id' => 7,
                'user_id' => null,
                'name' => 'vendor-api',
                'secret' => 'GYgysg3lGfaSGTZwyoCTpl4NBKVFsP1wkA3wYzJ9',
                'provider' => null,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2023-10-03 07:16:58',
                'updated_at' => '2023-10-03 07:16:58',
            ],
        ]);

        if ($saved) {
            //generate oauth_personal_access_clients
            $saved = DB::connection('tenant')->table('oauth_personal_access_clients')->insert([
                [
                    'id' => 1,
                    'client_id' => 1,
                    'created_at' => '2023-10-03 07:16:58',
                    'updated_at' => '2023-10-03 07:16:58',
                ],
            ]);
        }

        if ($saved) {
            $saved = $this->setUpSettingStore($vendor);
        }

        $this->seedDB();


        DB::purge('tenant');
        return $saved;
    }

    private function setConnection($tenant)
    {

        config(['database.connections.tenant' => [
            'driver' => 'mysql',
            'host' => "127.0.0.1",
            'port' => 3306,
            'database' => $tenant->database,
            'username' => $tenant->username,
            'password' => $tenant->password,
        ]]);

        return $tenant->database == config('database.connections.tenant.database');
    }

    private function migrateDB()
    {

        $path = 'database/migrations/tenant';
        $database = 'tenant';

        Artisan::call('migrate', [
            '--path' => $path,
            '--database' => $database,
        ]);
        Log::info('end artisan ');
    }

    private function setUpSettingStore($vendor)
    {
        $secretKey = session('secretKey');

        if (!$secretKey) {
            return redirect()->route('main.create-store');
        }
        $sessionData = json_decode(Storage::get("sessions/{$secretKey}.json"), true);

        $data1 = $sessionData['storeCreation-Step1'];
        $data3 = $sessionData['storeCreation-Step3'];
        $data4 = $sessionData['storeCreation-Step4'];

        $store = new StoreSettings();
        $store->setTranslation('title', Language::whereId($data3['languageId'])->value('code'), $data3['storeName']);
        $store->store_key = $this->generateKey(10);
        $store->vendor_id = $vendor->id;
        $store->domain = $data3['storeDomain'];
        $store->email = $data1['email'];
        $store->phone_code = $data1['phoneCode'];
        $store->mobile = $data1['mobileNumber'];
        $store->country_id = $data3['countryId'];
        $store->city_id = $data3['cityId'];
        $store->language_id = $data3['languageId'];
        $store->currently_sell = $data3['currentlySell'];
        $store->many_product_have = $data3['manyProductHave'];
        $store->subscription_id = 1;
        $store->template_id = $data4['templateId'] ?? null;
        $store->currency_id = 1;
        $store->is_cancel_order = true;
        $store->is_refund_order = false;
        $store->refund_duration_type = null;
        $store->refund_duration = null;
        $saved = $store->save();

        if (!$saved) {
            throw new Exception('Error [setUpSettingStore] ');
        }

        return $saved;
    }

    private function generateKey($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle($characters), 0, $length);
    }

    private function seedDB()
    {
        $database = 'tenant';

        try {
            Artisan::call('db:seed', [
                '--class' => 'MockStoreDataSeeder',
                '--database' => $database,
            ]);
            Log::info('Database seeding completed.');
        } catch (Exception $e) {
            Log::error('Database seeding failed: ' . $e->getMessage());
        }
    }

    private function checkSubdomainLanguages($value)
    {
        return preg_match('/^[A-Za-z\s]+$/', $value);
    }

    private function checkSubdomainValidate($value)
    {
        return preg_match('/^[A-Za-z]+$/', $value);
    }
}
