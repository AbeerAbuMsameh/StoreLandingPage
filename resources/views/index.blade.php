@extends('main.layouts.master')

@section('navigation')
    @include('main.partials.nav')
@endsection

@push('style')
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <!-- Index page css arabic -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/index.rtl.min.css')}} />
    @else
        <!-- Index page css english -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/index.min.css')}} />
    @endif
@endpush

@section('content')
    @foreach($sections as $section)
        @if($section->section->title == "hero")
            <x-main.header
                title="{{ __($section->title ?? null) }}"
                subtitle="{{ __($section->description  ?? null) }}"
                link="{{ __($section->link  ?? null) }}"
                image="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? Storage::url($section->image_rtl) : Storage::url($section->image_ltr) }}"
                image_alt="{{ __($section->image_alt) }}"
                button_name="{{ __($section->button_name  ?? null) }}"
            />
        @elseif($section->section->title == "section1")
            <x-main.features-section
                title="{{ __($section->title  ?? null) }}"
                description="{{ __($section->description  ?? null) }}"
                :template="$template_category"
             />
        @elseif($section->section->title == "section2")
            <x-main.features
                title="{{ __($section->title  ?? null) }}"
                description="{{ __($section->description  ?? null) }}"
                :features="$section->icons ?? []"
            />
        @elseif($section->section->title == "section3")
            <x-main.reports-section
                title="{{ __($section->title) }}"
                description="{{ __($section->description)}}"
                image="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? Storage::url($section->image_rtl) : Storage::url($section->image_ltr) }}"
                image_alt="{{ $section->image_alt }}"
                :icons="$section->icons ?? [] "
            />
        @elseif($section->section->title == "section4")
            <x-main.free-store-section
                title="{{ __($section->title ?? null) }}"
                description="{{ __($section->description ?? null)}}"
                link="{{ __($section->link  ?? null) }}"
                button_name="{{ __($section->button_name  ?? null) }}"
           />
        @elseif($section->section->title == "section5")
            <x-main.payment-section
                title="{{ __($section->title?? null) }}"
                description="{{ __($section->description?? null)}}"
                image="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? Storage::url($section->image_rtl) : Storage::url($section->image_ltr) }}"
                image_alt="{{ $section->image_alt }}"
                :icons="$section->icons ?? [] "
                />

        @elseif($section->section->title == "section6")
            <x-main.best-section
                title="{{ __($section->title ?? null) }}"
                description="{{ __($section->description ?? null)}}"
                image="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? Storage::url($section->image_rtl) : Storage::url($section->image_ltr) }}"
                image_alt="{{ $section->image_alt }}"
                :icons="$section->icons"
            />
        @elseif($section->section->title == "section7")
            <x-main.partners-section
                title="{{ __($section->title ?? null) }}"
                :success_partner="$success_partner ?? null"
            />
        @elseif($section->section->title == "section8")
            <x-main.faqs-section
                title="{{ __($section->title ?? null) }}"
                description="{{ __($section->description ?? null)}}"
                :faqs_odd="$faqs_odd"
                :faqs_even="$faqs_even"
                />
        @endif
    @endforeach
@endsection

