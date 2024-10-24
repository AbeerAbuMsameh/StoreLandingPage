@extends('main.layouts.master')

@section('navigation')
    @include('main.partials.light-nav')
@endsection

@push('style')
    <!-- help page css arabic -->
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <link rel="stylesheet" href="{{ asset('./main/assets/css/countries.rtl.min.css') }}"/>
    @else
        <link rel="stylesheet" href="{{ asset('./main/assets/css/countries.min.css') }}"/>
    @endif
@endpush

@section('content')
    <main class="mainContent countries container containerEdit pt-150 pt-md-170 mb-100 mb-md-120">
        <section class="intro">
            <h1 class="fw-medium fs-32px mb-25 text-center text-capitalize" data-aos="fade-up">
                {{ __('main.countries') }}
            </h1>
            <p class="fs-14px text-center mb-0 intro__subTitle mx-auto" data-aos="fade-up" data-aos-delay="200">
                {{ __('main.koninpay_countries_description') }}
            </p>
        </section>
        <section class="map mb-20">
            <div class="grid align-items-center mt-30">
                <div class="g-col-12 g-col-xl-7" data-aos="fade-right" data-aos-delay="200">
                    <h2 class="fw-medium fs-32px mb-25">Lebanon</h2>
                    <p>
                        Koninpay is an electronic payment service provider that offers a
                        comprehensive solution to meet your online financial needs. We
                        strive to provide safe and convenient payment solutions and
                        improve the user experience in digital banking operations.
                    </p>
                    <p>
                        We understand the importance of virtual cards, digital wallets,
                        and easy access to funds in the modern digital age. That's why we
                        offer a variety of payment options, including:
                    </p>
                    <ul>
                        <li>Online payments through our website or mobile app</li>
                        <li>In-app purchases for mobile games and apps</li>
                        <li>Money transfers to friends and family</li>
                        <li>Money requests for donations or crowdfunding campaigns</li>
                    </ul>
                    <p>
                        We also offer a variety of security features to protect your data,
                        including:
                    </p>
                    <ul>
                        <li>Secure encryption of all transactions</li>
                        <li>Two-factor authentication for added security</li>
                        <li>Strict compliance with industry regulations</li>
                    </ul>
                </div>
                <div class="g-col-12 g-col-xl-5 order-first order-xl-last text-center" data-aos="fade-left">
                    <img class="img-fluid w-100 imgWidthInMobile" src="{{asset('./main/assets/imgs/lebanon-map.png')}}" alt="lebanon-map" width="481" height="661"/>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M9.9 0H6.6C3.48873 0 1.9331 0 0.966548 0.988515C0 1.97703 0 3.56802 0 6.75C0 9.93198 0 11.523 0.966548 12.5115C1.9331 13.5 3.48873 13.5 6.6 13.5H9.9C13.0113 13.5 14.5669 13.5 15.5335 12.5115C16.5 11.523 16.5 9.93198 16.5 6.75C16.5 3.56802 16.5 1.97703 15.5335 0.988515C14.5669 0 13.0113 0 9.9 0Z"/>
                            <path d="M13.5965 3.77574C13.859 3.55698 13.8945 3.16681 13.6757 2.90429C13.457 2.64177 13.0668 2.6063 12.8043 2.82507L11.0232 4.30931C10.2535 4.95072 9.71913 5.3946 9.26798 5.68476C8.83125 5.96564 8.53509 6.05993 8.25041 6.05993C7.96572 6.05993 7.66956 5.96564 7.23284 5.68476C6.78168 5.3946 6.2473 4.95072 5.47761 4.30931L3.69652 2.82507C3.434 2.6063 3.04384 2.64177 2.82507 2.90429C2.6063 3.16681 2.64177 3.55698 2.90429 3.77574L4.7164 5.28583C5.44764 5.89522 6.04033 6.38914 6.56343 6.72558C7.10834 7.07604 7.63902 7.29743 8.25041 7.29743C8.8618 7.29743 9.39248 7.07604 9.93739 6.72558C10.4605 6.38914 11.0532 5.89522 11.7844 5.28582L13.5965 3.77574Z"/>
                        </svg>
                        <a class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none" href="mailto:info@konincloud.com">info@konincloud.com</a>
                    </div>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M0.87868 1.37868C0 2.25736 0 3.67157 0 6.5V9.5C0 12.3284 0 13.7426 0.87868 14.6213C1.75736 15.5 3.17157 15.5 6 15.5C8.82843 15.5 10.2426 15.5 11.1213 14.6213C12 13.7426 12 12.3284 12 9.5V6.5C12 3.67157 12 2.25736 11.1213 1.37868C10.2426 0.5 8.82843 0.5 6 0.5C3.17157 0.5 1.75736 0.5 0.87868 1.37868Z" fill="#F16645"/>
                            <path d="M3.75 2.1875C3.43934 2.1875 3.1875 2.43934 3.1875 2.75C3.1875 3.06066 3.43934 3.3125 3.75 3.3125H8.25C8.56066 3.3125 8.8125 3.06066 8.8125 2.75C8.8125 2.43934 8.56066 2.1875 8.25 2.1875H3.75Z" fill="#F16645"/>
                            <path d="M6 13.25C6.82843 13.25 7.5 12.5784 7.5 11.75C7.5 10.9216 6.82843 10.25 6 10.25C5.17157 10.25 4.5 10.9216 4.5 11.75C4.5 12.5784 5.17157 13.25 6 13.25Z" fill="#F16645"/>
                        </svg>
                        <p class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none">
                            +961 744 444 1441
                        </p>
                    </div>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M13.7874 14.2718C14.8573 13.6884 15.5 12.9405 15.5 12.125C15.5 11.2606 14.7779 10.4721 13.5903 9.875C12.217 9.18453 10.2212 8.75 8 8.75C5.77875 8.75 3.78304 9.18453 2.40973 9.875C1.22213 10.4721 0.5 11.2606 0.5 12.125C0.5 12.9894 1.22213 13.7779 2.40973 14.375C3.78304 15.0655 5.77875 15.5 8 15.5C10.33 15.5 12.4118 15.0219 13.7874 14.2718Z" fill="#F16645"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.38598C2.75 2.68753 5.10051 0.5 8 0.5C10.8995 0.5 13.25 2.68753 13.25 5.38598C13.25 8.06328 11.5744 11.1874 8.96005 12.3047C8.35061 12.5651 7.64939 12.5651 7.03995 12.3047C4.42562 11.1874 2.75 8.06328 2.75 5.38598ZM8 7.25C8.82843 7.25 9.5 6.57843 9.5 5.75C9.5 4.92157 8.82843 4.25 8 4.25C7.17157 4.25 6.5 4.92157 6.5 5.75C6.5 6.57843 7.17157 7.25 8 7.25Z" fill="#F16645"/>
                        </svg>
                        <p class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none">
                            Beirut, Lebanon
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="map mb-20">
            <div class="grid align-items-center">
                <div class="g-col-12 g-col-xl-5 text-center" data-aos="fade-right">
                    <img class="img-fluid w-100 imgWidthInMobile" src="{{asset('./main/assets/imgs/syria-map.png')}}" alt="syria-map" width="481" height="661"/>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M9.9 0H6.6C3.48873 0 1.9331 0 0.966548 0.988515C0 1.97703 0 3.56802 0 6.75C0 9.93198 0 11.523 0.966548 12.5115C1.9331 13.5 3.48873 13.5 6.6 13.5H9.9C13.0113 13.5 14.5669 13.5 15.5335 12.5115C16.5 11.523 16.5 9.93198 16.5 6.75C16.5 3.56802 16.5 1.97703 15.5335 0.988515C14.5669 0 13.0113 0 9.9 0Z"/>
                            <path d="M13.5965 3.77574C13.859 3.55698 13.8945 3.16681 13.6757 2.90429C13.457 2.64177 13.0668 2.6063 12.8043 2.82507L11.0232 4.30931C10.2535 4.95072 9.71913 5.3946 9.26798 5.68476C8.83125 5.96564 8.53509 6.05993 8.25041 6.05993C7.96572 6.05993 7.66956 5.96564 7.23284 5.68476C6.78168 5.3946 6.2473 4.95072 5.47761 4.30931L3.69652 2.82507C3.434 2.6063 3.04384 2.64177 2.82507 2.90429C2.6063 3.16681 2.64177 3.55698 2.90429 3.77574L4.7164 5.28583C5.44764 5.89522 6.04033 6.38914 6.56343 6.72558C7.10834 7.07604 7.63902 7.29743 8.25041 7.29743C8.8618 7.29743 9.39248 7.07604 9.93739 6.72558C10.4605 6.38914 11.0532 5.89522 11.7844 5.28582L13.5965 3.77574Z"/>
                        </svg>
                        <a class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none" href="mailto:info@konincloud.com">info@konincloud.com</a>
                    </div>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M0.87868 1.37868C0 2.25736 0 3.67157 0 6.5V9.5C0 12.3284 0 13.7426 0.87868 14.6213C1.75736 15.5 3.17157 15.5 6 15.5C8.82843 15.5 10.2426 15.5 11.1213 14.6213C12 13.7426 12 12.3284 12 9.5V6.5C12 3.67157 12 2.25736 11.1213 1.37868C10.2426 0.5 8.82843 0.5 6 0.5C3.17157 0.5 1.75736 0.5 0.87868 1.37868Z" fill="#F16645"/>
                            <path d="M3.75 2.1875C3.43934 2.1875 3.1875 2.43934 3.1875 2.75C3.1875 3.06066 3.43934 3.3125 3.75 3.3125H8.25C8.56066 3.3125 8.8125 3.06066 8.8125 2.75C8.8125 2.43934 8.56066 2.1875 8.25 2.1875H3.75Z" fill="#F16645"/>
                            <path d="M6 13.25C6.82843 13.25 7.5 12.5784 7.5 11.75C7.5 10.9216 6.82843 10.25 6 10.25C5.17157 10.25 4.5 10.9216 4.5 11.75C4.5 12.5784 5.17157 13.25 6 13.25Z" fill="#F16645"/>
                        </svg>
                        <p class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none">
                            +961 744 444 1441
                        </p>
                    </div>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M13.7874 14.2718C14.8573 13.6884 15.5 12.9405 15.5 12.125C15.5 11.2606 14.7779 10.4721 13.5903 9.875C12.217 9.18453 10.2212 8.75 8 8.75C5.77875 8.75 3.78304 9.18453 2.40973 9.875C1.22213 10.4721 0.5 11.2606 0.5 12.125C0.5 12.9894 1.22213 13.7779 2.40973 14.375C3.78304 15.0655 5.77875 15.5 8 15.5C10.33 15.5 12.4118 15.0219 13.7874 14.2718Z" fill="#F16645"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.38598C2.75 2.68753 5.10051 0.5 8 0.5C10.8995 0.5 13.25 2.68753 13.25 5.38598C13.25 8.06328 11.5744 11.1874 8.96005 12.3047C8.35061 12.5651 7.64939 12.5651 7.03995 12.3047C4.42562 11.1874 2.75 8.06328 2.75 5.38598ZM8 7.25C8.82843 7.25 9.5 6.57843 9.5 5.75C9.5 4.92157 8.82843 4.25 8 4.25C7.17157 4.25 6.5 4.92157 6.5 5.75C6.5 6.57843 7.17157 7.25 8 7.25Z" fill="#F16645"/>
                        </svg>
                        <p class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none">Damascus, SYRIA
                        </p>
                    </div>
                </div>
                <div class="g-col-12 g-col-xl-7" data-aos="fade-left" data-aos-delay="200">
                    <h2 class="fw-medium fs-32px mb-25">Syria</h2>
                    <p>
                        Koninpay is an electronic payment service provider that offers a
                        comprehensive solution to meet your online financial needs. We
                        strive to provide safe and convenient payment solutions and
                        improve the user experience in digital banking operations.
                    </p>
                    <p>
                        We understand the importance of virtual cards, digital wallets,
                        and easy access to funds in the modern digital age. That's why we
                        offer a variety of payment options, including:
                    </p>
                    <ul>
                        <li>Online payments through our website or mobile app</li>
                        <li>In-app purchases for mobile games and apps</li>
                        <li>Money transfers to friends and family</li>
                        <li>Money requests for donations or crowdfunding campaigns</li>
                    </ul>
                    <p>
                        We also offer a variety of security features to protect your data,
                        including:
                    </p>
                    <ul>
                        <li>Secure encryption of all transactions</li>
                        <li>Two-factor authentication for added security</li>
                        <li>Strict compliance with industry regulations</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="map mb-20">
            <div class="grid align-items-center">
                <div class="g-col-12 g-col-xl-7" data-aos="fade-right" data-aos-delay="200">
                    <h2 class="fw-medium fs-32px mb-25">Iraq</h2>
                    <p>
                        Koninpay is an electronic payment service provider that offers a
                        comprehensive solution to meet your online financial needs. We
                        strive to provide safe and convenient payment solutions and
                        improve the user experience in digital banking operations.
                    </p>
                    <p>
                        We understand the importance of virtual cards, digital wallets,
                        and easy access to funds in the modern digital age. That's why we
                        offer a variety of payment options, including:
                    </p>
                    <ul>
                        <li>Online payments through our website or mobile app</li>
                        <li>In-app purchases for mobile games and apps</li>
                        <li>Money transfers to friends and family</li>
                        <li>Money requests for donations or crowdfunding campaigns</li>
                    </ul>
                    <p>
                        We also offer a variety of security features to protect your data,
                        including:
                    </p>
                    <ul>
                        <li>Secure encryption of all transactions</li>
                        <li>Two-factor authentication for added security</li>
                        <li>Strict compliance with industry regulations</li>
                    </ul>
                </div>
                <div class="g-col-12 g-col-xl-5 order-first order-xl-last text-center" data-aos="fade-left">
                    <img class="img-fluid w-100 imgWidthInMobile" src="{{asset('./main/assets/imgs/iraq-map.png')}}" alt="lebanon-map" width="481" height="661"/>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M9.9 0H6.6C3.48873 0 1.9331 0 0.966548 0.988515C0 1.97703 0 3.56802 0 6.75C0 9.93198 0 11.523 0.966548 12.5115C1.9331 13.5 3.48873 13.5 6.6 13.5H9.9C13.0113 13.5 14.5669 13.5 15.5335 12.5115C16.5 11.523 16.5 9.93198 16.5 6.75C16.5 3.56802 16.5 1.97703 15.5335 0.988515C14.5669 0 13.0113 0 9.9 0Z"/>
                            <path d="M13.5965 3.77574C13.859 3.55698 13.8945 3.16681 13.6757 2.90429C13.457 2.64177 13.0668 2.6063 12.8043 2.82507L11.0232 4.30931C10.2535 4.95072 9.71913 5.3946 9.26798 5.68476C8.83125 5.96564 8.53509 6.05993 8.25041 6.05993C7.96572 6.05993 7.66956 5.96564 7.23284 5.68476C6.78168 5.3946 6.2473 4.95072 5.47761 4.30931L3.69652 2.82507C3.434 2.6063 3.04384 2.64177 2.82507 2.90429C2.6063 3.16681 2.64177 3.55698 2.90429 3.77574L4.7164 5.28583C5.44764 5.89522 6.04033 6.38914 6.56343 6.72558C7.10834 7.07604 7.63902 7.29743 8.25041 7.29743C8.8618 7.29743 9.39248 7.07604 9.93739 6.72558C10.4605 6.38914 11.0532 5.89522 11.7844 5.28582L13.5965 3.77574Z"/>
                        </svg>
                        <a class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none" href="mailto:info@konincloud.com">info@konincloud.com</a>
                    </div>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M0.87868 1.37868C0 2.25736 0 3.67157 0 6.5V9.5C0 12.3284 0 13.7426 0.87868 14.6213C1.75736 15.5 3.17157 15.5 6 15.5C8.82843 15.5 10.2426 15.5 11.1213 14.6213C12 13.7426 12 12.3284 12 9.5V6.5C12 3.67157 12 2.25736 11.1213 1.37868C10.2426 0.5 8.82843 0.5 6 0.5C3.17157 0.5 1.75736 0.5 0.87868 1.37868Z" fill="#F16645"/>
                            <path d="M3.75 2.1875C3.43934 2.1875 3.1875 2.43934 3.1875 2.75C3.1875 3.06066 3.43934 3.3125 3.75 3.3125H8.25C8.56066 3.3125 8.8125 3.06066 8.8125 2.75C8.8125 2.43934 8.56066 2.1875 8.25 2.1875H3.75Z" fill="#F16645"/>
                            <path d="M6 13.25C6.82843 13.25 7.5 12.5784 7.5 11.75C7.5 10.9216 6.82843 10.25 6 10.25C5.17157 10.25 4.5 10.9216 4.5 11.75C4.5 12.5784 5.17157 13.25 6 13.25Z" fill="#F16645"/>
                        </svg>
                        <p class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none">
                            +961 744 444 1441
                        </p>
                    </div>
                    <div class="map__info d-flex gap-13 flex-nowrap align-items-center justify-content-center justify-content-xl-start mb-15">
                        <svg class="svgPath flex-shrink-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M13.7874 14.2718C14.8573 13.6884 15.5 12.9405 15.5 12.125C15.5 11.2606 14.7779 10.4721 13.5903 9.875C12.217 9.18453 10.2212 8.75 8 8.75C5.77875 8.75 3.78304 9.18453 2.40973 9.875C1.22213 10.4721 0.5 11.2606 0.5 12.125C0.5 12.9894 1.22213 13.7779 2.40973 14.375C3.78304 15.0655 5.77875 15.5 8 15.5C10.33 15.5 12.4118 15.0219 13.7874 14.2718Z" fill="#F16645"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.38598C2.75 2.68753 5.10051 0.5 8 0.5C10.8995 0.5 13.25 2.68753 13.25 5.38598C13.25 8.06328 11.5744 11.1874 8.96005 12.3047C8.35061 12.5651 7.64939 12.5651 7.03995 12.3047C4.42562 11.1874 2.75 8.06328 2.75 5.38598ZM8 7.25C8.82843 7.25 9.5 6.57843 9.5 5.75C9.5 4.92157 8.82843 4.25 8 4.25C7.17157 4.25 6.5 4.92157 6.5 5.75C6.5 6.57843 7.17157 7.25 8 7.25Z" fill="#F16645"/>
                        </svg>
                        <p class="map__info--details fs-13px fw-medium text-7e m-0 text-decoration-none">
                            Baghdad, IRAQ
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

