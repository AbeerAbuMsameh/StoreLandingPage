<?php

global $response;

use App\FormatResponse\Format;
use App\Models\Cart;
use App\Models\Country;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\Store;
use CodeZero\UniqueTranslation\UniqueTranslationRule;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Request;

// Vars..
global $store;
global $setting;
global $menus;
global $cartCount;
global $langs;
global $countries;
// Vars..

function translateToArabic(string $text)
{
    return 'عربي - ' . $text;
}

function getVendor()
{
    $vendor = Auth::guard('api-vendor')->user();
    if ($vendor)
        return $vendor;
    return errors_response(false, trans('auth.unauthenticated'), [], 401);
}

function getUser()
{
    $user = Auth::guard('api-user')->user();
    if ($user)
        return $user;
    return errors_response(false, trans('auth.unauthenticated'), [], 401);
}

function getAdmin()
{
    $admin = Auth::guard('api-admin')->user();
    if ($admin)
        return $admin;
    return errors_response(false, trans('auth.unauthenticated'), [], 401);
}

function getStore()
{
    if (is_null($GLOBALS['store'])) {
        if (is_null(getVendor()->store_id)) {
            return getVendor()->store;
        } else {
            return getVendor()->storeSubVendor;
        }
    } else {
        return $GLOBALS['store'];
    }
}


function getStoreWeb()
{
    if (is_null($GLOBALS['store'])) {
//        if(env('APP_DEBUG')){
//            $GLOBALS['store'] = Store::first();
//        }else{
        $GLOBALS['store'] = \Illuminate\Support\Facades\Session::get('store');
//        }
    }
    return $GLOBALS['store'];
}


function storeLangs()
{

    if (is_null($GLOBALS['langs'])) {
        $langStore = json_decode(getStoreWeb()->languages);
        $langs['defualt'] = new Collection();
        $langs['selected'] = Language::where('code', app()->getLocale())->first();
        $langs['all'] = Language::whereIn('code', $langStore ?? [])->whereNot('code', $langs['selected']->code)->get();

        if (getStoreWeb()->default_language_status) {
            $langs['defualt'] = Language::find(getStoreWeb()->language_id);
            if ($langs['selected']->id != $langs['defualt']->id) {
                $langs['all']->add($langs['defualt']);
            }
        }
        $GLOBALS['langs'] = $langs;
    }
    return $GLOBALS['langs'];
}

function uniqueValidation($table, $column, $id)
{
    return UniqueTranslationRule::for($table, $column)->ignore($id)->where('store_id', getStore()->id);
}

function newSort($query)
{
    $sort = $query->latest()->get()->first()->sort;
    if (!$sort)
        $sort = 0;
    return (int)$sort;
}

function storeImageBase64($folderPath, $imageBase64)
{
    $store = getStoreTest();
    $fileName = null;
    if ($imageBase64) {
        $base64Image = explode(";base64,", $imageBase64);
        $explodeImage = explode("image/", $base64Image[0]);
        $imageType = $explodeImage[1];

        $image = base64_decode($base64Image[1]);
        $fileName = Str::random(40) . '.' . $imageType;
        $path = $store->id . '/' . $folderPath . $fileName;
        Storage::disk('public')->put($path, $image);
    }
    return $path;
}

function getStoreTest()
{
    if (is_null($GLOBALS['store'])) {
        $GLOBALS['store'] = \Illuminate\Support\Facades\Session::get('store') ?? getStore();
        return $GLOBALS['store'];
    } else
        return $GLOBALS['store'];
}

function uploadFile($file, $path = 'general'): string
{
//    $fileName = Str::random(4) . time() . explode('.', $file->hashName())[0] . "." . $file->getClientOriginalExtension();
    // $file->storePubliclyAs($path . '/', $fileName);
    $store = getStoreTest();
    return $file->store($store->id . '/' . $path, 'public');
    // return $path . '/' . $fileName;
}

// store video
function storeFile($folderPath, $file)
{
    $fileName = null;
    if ($file) {
        $fileName = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $path = $folderPath . $fileName;
        Storage::disk('public')->put($path, file_get_contents($file));
    }
    return $fileName;
}

function storeFileWithPath($folderPath, $file)
{
    $fileName = null;
    if ($file) {
        $fileName = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $path = $folderPath . '/' . $fileName;
        // Storage::disk('public')->put($path, $file);
        $path = Storage::disk('public')->put($path, $file);
    }

    return $path;
}

//end video

function deleteImage($path, $image)
{
    if ($image != null) {
        if (Storage::disk('public')->exists($path . $image)) {
            Storage::disk('public')->delete($path . $image);
        }
    }
}

function deleteImageFullPath($fullPath)
{
    if (!is_null($fullPath))
        return Storage::disk('public')->delete($fullPath);
}

function check_role($id)
{
    $data = Role::findById($id);
    if ($data)
        return custom_response(false, "role not found", $data, 404);
    if ($data->store_id != getStore()->id)
        return custom_response(false, "role not found", $data, 404);
}


function dataStoreTemplate()
{
    $menus = getMenus();
    $cartCount = getCartCount();
    $setting = getSetting();
    $countries = getCountry();

    if (!key_exists('twitter', $setting)) {
        $setting['twitter'] = '';
    }
    if (!key_exists('facebook', $setting)) {
        $setting['facebook'] = '';
    }
    if (!key_exists('instagram', $setting)) {
        $setting['instagram'] = '';
    }
    if (!key_exists('header_logo', $setting)) {
        $setting['header_logo'] = '';
    }
    if (!key_exists('footer_logo', $setting)) {
        $setting['footer_logo'] = '';
    }
    return [
        'menus' => $menus,
        'cartCount' => $cartCount,
        'setting' => $setting,
        'countries' => $countries
    ];
}

function getCountry()
{

    if (is_null($GLOBALS['countries'])) {
        $GLOBALS['countries'] = Country::where('is_active', true)->get();
    }
    return $GLOBALS['countries'];
}


function getMenus()
{
    if (is_null($GLOBALS['menus'])) {
        $GLOBALS['menus'] = Menu::where('store_id', getStoreWeb()->id)
            ->where('parent_id', null)
            ->where('position', 'footer')
            ->where('status', 1)
            ->orderBy('sort')
            ->take(3)
            ->get();
    }
    return $GLOBALS['menus'];
}

function getSetting()
{
    if (is_null($GLOBALS['setting'])) {
        $GLOBALS['setting'] = Setting::where('store_id', getStoreWeb()->id)
            ->whereIn('key', ['twitter', 'facebook', 'instagram', 'header_logo', 'footer_logo'])
            ->pluck('value', 'key')
            ->toArray();
    }
    return $GLOBALS['setting'];
}


function getCartCount()
{
    $cartCount = 0;
    if (is_null($GLOBALS['cartCount'])) {
        if (auth('user')->check() || !is_null(request()->cookie('cookie_id'))) {
            $cookie = request()->cookie('cookie_id');

            $cartCount = Cart::when(!is_null($cookie), function ($q) use ($cookie) {
                $q->where('cookie_id', $cookie);
            })
                ->when(auth('user')->check(), function ($q) {
                    $q->orWhere('user_id', auth('user')->user()->id);
                })
                ->count();
        }
        $GLOBALS['cartCount'] = $cartCount;
    }
    return $GLOBALS['cartCount'];
}

function getStoreLanguages()
{
    $languages = json_decode(getStore()->languages);
    return $languages;
}
