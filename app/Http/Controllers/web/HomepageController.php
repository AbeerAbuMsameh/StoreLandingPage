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
use App\Models\Packages\PaidPackageDuration;
use App\Models\PackageView;
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

        return view('main.pages.faq', compact('section9', 'faqs_odd', 'faqs_even'));
    }

    public function privacyPage()
    {
        $page = Page::where('page_type', 'privacy')->first();


        if ($page == null) {
            return errors_response(false, __('customer.not-found'), [], 404);
        }

        return view('main.pages.privacy-policy', compact('page'));

    }
    public function termsPage()
    {
        $page = Page::where('page_type', 'terms')->first();


        if ($page == null) {
            return errors_response(false, __('customer.not-found'), [], 404);
        }

        return view('main.pages.privacy-policy', compact('page'));

    }


    public function help(Request $request)
    {
        $ip = $request->ip();
        $currentUserInfo = Location::get($ip);

        $country_code = $currentUserInfo->countryCode ?? 'US' ;

        return view('main.pages.help', compact('country_code'));
    }

    public function store_contact(Request $request)
    {
        $ip = $request->ip();
        $currentUserInfo = Location::get($ip);

        $city = $currentUserInfo->cityName ?? '';
        $country = $currentUserInfo->countryName ?? '';

        $validator = Validator($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'terms' => 'required|accepted',
            'country_code' => 'required|string',
            'country' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $validator->validate();
        $data['city'] = $city;
        unset($data['terms']);
        $this->repository->create($data);
        return redirect()->back()->with('success', __('Your message has been sent!'));

    }

    public function countries(Request $request)
    {
        $countries = Country::where('status' ,1 )->get();

        return view('main.pages.countries', compact('countries'));
    }

    public function getTemplates()
    {
        $templateCategories = TemplateCategory::with('templates')
            ->where('appear_on_home', 1)
            ->orderBy('sort')
            ->get();

        return view('main.pages.templates',compact('templateCategories'));
    }

    public function pricing(Request $request)
    {
        $ipAddress = $request->ip();
        // Simulate IP address for testing
        $ipAddress = '213.149.10.10';
        $currentUserInfo = Location::get($ipAddress);

        // Assume 'LB' is a default country code for testing
        $countryCode = 'LB';

        if ($countryCode == null) {
            return response()->json([
                'success' => false,
                'message' => __('Country Not Found'),
            ], 400);
        }

        // Retrieve country ID based on the country code
        $country_id = Country::where('iso2', $countryCode)
            ->orWhere('iso3', $countryCode)
            ->pluck('id')
            ->first();

        if ($country_id) {

            $packageCategories = PackageView::with(['category','features'])
                ->where('country_id', $country_id)
                ->where('status', 1)
                ->get()
                ->groupBy('category.name');

            $features = PackageFeature::where('status', 1)
                ->get();

            return view('main.pages.pricing', compact('packageCategories','features'));
        } else {
            return response()->json([
                'success' => false,
                'message' => __('Your Country Not Supported'),
            ], 400);
        }
    }

}
