<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\FAQ;
use App\Models\Help;
use App\Models\HomepageSection;
use App\Models\Language;
use App\Models\PackageFeature;
use App\Models\Packages\Package;
use App\Models\Packages\PackageCategory;
use App\Models\Page;
use App\Models\Setting;
use App\Models\SuccessPartner;
use App\Models\TemplateCategory;
use App\Repositories\ContactRepositoryEloquent;
use Illuminate\Support\Facades\App;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;


class HomepageController extends Controller
{
    public function __construct(private ContactRepositoryEloquent $contactRepositoryEloquent)
    {
        $this->repository = $contactRepositoryEloquent;
    }

    public function index()
    {

        $sections = HomepageSection::with(['icons' => function ($query) {
            $query->where('status', 1)->orderBy('sort');
        }])->orderBy('sort')->where('status', 1)->get();
        $template_category = TemplateCategory::where('status', 1)->where('appear_on_home', 1)->get();
        $success_partner = SuccessPartner::where('status', 1)->get();
        $faqs_odd = FAQ::where('status', 1)->whereRaw('MOD(id, 2) != 0')->get();
        $faqs_even = FAQ::where('status', 1)->whereRaw('MOD(id, 2) = 0')->get();
        return view('index', compact('sections', 'success_partner', 'template_category', 'faqs_odd', 'faqs_even'));
    }

    public function faq()
    {
        $section9 = HomepageSection::where('section_id', 9)->first();
        $faqs_odd = FAQ::where('status', 1)->whereRaw('MOD(id, 2) != 0')->get();
        $faqs_even = FAQ::where('status', 1)->whereRaw('MOD(id, 2) = 0')->get();

        return view('main.faq', compact('section9', 'faqs_odd', 'faqs_even'));
    }

    public function help(Request $request)
    {

        $helps = Help::with(['childrens' => function ($query) {
            $query->orderBy('sort', 'asc');
        }])
            ->where('status', 1)
            ->where('parent_id', null)
            ->whereHas('childrens')
            ->get();

        $helps2 = Help::with(['childrens' => function ($query) {
            $query->orderBy('sort', 'asc');
        }])
            ->where('status', 1)
            ->whereDoesntHave('parent')
            ->whereDoesntHave('childrens')
            ->get();


        return view('main.setting-up-store', compact('helps', 'helps2'));
    }

    public function setting_store_info(Request $request, $id)
    {

        $helps = Help::with(['childrens' => function ($query) {
            $query->orderBy('sort', 'asc');
        }])
            ->where('status', 1)
            ->where('parent_id', null)
            ->whereHas('childrens')
            ->get();

        $helps2 = Help::with(['childrens' => function ($query) {
            $query->orderBy('sort', 'asc');
        }])
            ->where('status', 1)
            ->whereDoesntHave('parent')
            ->whereDoesntHave('childrens')
            ->get();


        $main_help = Help::with(['media' => function ($query) {
            $query->where('lang_code', App::getLocale());
        }])->findOrFail($id);

        return view('main.setting-up-store-info', compact('helps', 'helps2', 'main_help'));
    }

    public function page($slug)
    {
        $page = Page::whereRaw("JSON_UNQUOTE(JSON_EXTRACT(slug, '$.*')) REGEXP ?", [$slug])
            ->first();

        return view('main.show', ['page' => $page]);
    }

    public function contact(Request $request)
    {
        $ip = $request->ip();
        $currentUserInfo = Location::get($ip);

        $country_code = $currentUserInfo->countryCode ?? 'Unknown';

        return view('main.contact-us', compact('country_code'));
    }

    public function countries(Request $request)
    {
        $ip = $request->ip();
        $currentUserInfo = Location::get($ip);

        $country_code = $currentUserInfo->countryCode ?? 'Unknown';

        return view('main.contact-us', compact('country_code'));
    }

    public function store_contact(Request $request)
    {
        $ip = $request->ip();
        $currentUserInfo = Location::get($ip);

        $city = $currentUserInfo->cityName ?? 'Unknown';
        $country = $currentUserInfo->countryName ?? 'Unknown';

        $validator = Validator($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);

        }

        $data = $validator->validate();
        $data['city'] = $city;
        $data['country'] = $country;
        $this->repository->create($data);
        return response()->json(['message' => __('main.contact-create')]);

    }

    public function getTemplates()
    {
        $templateCategories = TemplateCategory::with('templates')
            ->where('appear_on_home', 1)
            ->orderBy('sort')
            ->get();

        return main_response(true,__('main.templates'),$templateCategories,200);
    }

    public function getLanguages()
    {
        $languages = Language::select('id','lang','flag','is_rtl')->get();

        return main_response(true,__('main.languages'),$languages,200);
    }

    public function pricing(Request $request)
    {

        $ipAddress = $request->ip();
        $currentUserInfo = Location::get($ipAddress);

        $countryCode = $currentUserInfo->countryCode ?? 'Unknown';

        $countryCode = 'IQ';

        if ($countryCode == null) {
            return errors_response(__('false'), __('customer.county-not-found'), [], 400);
        }

        $country_id = Country::where('iso2', $countryCode)->where('iso3', $countryCode)->pluck('id')->first();
        if ($country_id) {
            $packageCategories = PackageCategory::with([
                'freePackages' => function ($query) use ($country_id) {
                    $query->where('country_id', $country_id);
                },
                'paidPackages' => function ($query) use ($country_id) {
                    $query->where('country_id', $country_id)->where('status', 1);
                },
                'freePackages.package.packageFeatures',
                'paidPackages.package.packageFeatures'
            ])
                ->get();

            $PackageDurations = [];

            if ($packageCategories) {
                foreach ($packageCategories as $packageCategory) {
                    foreach ($packageCategory->paidPackages as $paidPackage) {
                        if ($paidPackage->package && $paidPackage->package->packageFeatures) {
                            $packageFeatureTitles = PackageFeature::whereIn('id', $paidPackage->package->packageFeatures->pluck('package_feature_id'))->pluck('title');
                            $paidPackage->type = 'paid';
                            $paidPackage->packageFeatureTitles = $packageFeatureTitles;
                        }

                        $paidPackageDurations = $paidPackage->durations;

                        if ($paidPackageDurations) {
                            foreach ($paidPackageDurations as $paidPackageDuration) {
                                if ($paidPackageDuration->status === 1 && $paidPackageDuration->package_category_id === $paidPackage->package_category_id) {
                                    $discountedPrice = $paidPackage->monthly_price;

                                    if ($paidPackageDuration->discount === 'percentage' || $paidPackageDuration->discount === 'both') {
                                        $discountedPrice *= (1 - $paidPackageDuration->discount_rate / 100);
                                    }

                                    if ($paidPackage->package && $paidPackage->package->packageFeatures) {
                                        $packageFeatureTitlesDuration = PackageFeature::whereIn('id', $paidPackage->package->packageFeatures->pluck('package_feature_id'))->pluck('title');
                                        $paidPackageDuration->packageFeatureTitles = $packageFeatureTitlesDuration;
                                    }

                                    $PackageDurations[] = [
                                        'id' => $paidPackageDuration->id,
                                        'package_category_id' => $paidPackageDuration->package_category_id,
                                        'name' => $paidPackage->package->name ?? null,
                                        'price' => $discountedPrice,
                                        'discount' => $paidPackageDuration->discount,
                                        'color' => $paidPackage->package->color ?? null,
                                        'package_features' => $paidPackageDuration->packageFeatureTitles ?? [],
                                        'type' => 'paid_duration',
                                    ];
                                }
                            }
                        }
                    }
                    foreach ($packageCategory->freePackages as $freePackage) {
                        if ($freePackage->package && $freePackage->package->packageFeatures) {
                            $packageFeatureTitles = PackageFeature::whereIn('id', $freePackage->package->packageFeatures->pluck('package_feature_id'))->pluck('title');
                            $freePackage->type = 'free';
                            $freePackage->packageFeatureTitles = $packageFeatureTitles;
                        }
                    }
                }
            }

            return view('main.pages.pricing', compact('packageCategories' , 'PackageDurations'));
        } else {
            return errors_response(__('false'), __('Your Country Not Supported'), [], 400);

        }
    }

}
