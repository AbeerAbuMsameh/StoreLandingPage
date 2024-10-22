@extends('main.layouts.master')

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
                buttonText="{{ __('main.create_your_store_now') }}"
                image="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? Storage::url($section->image_ltr) : Storage::url($section->image_rtl) }}"
                image_alt="{{ __($section->image_alt) }}"
                button_name="{{  __($section->button_name ?? null) }}"
            />
        @elseif($section->section->title == "section1")
            <x-main.features-section
                title="{{ __($section->title  ?? null) }}"
                description="{{ __($section->description  ?? null) }}"
                image="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? Storage::url($section->image_ltr) : Storage::url($section->image_rtl) }}"
                image_alt="{{ __($section->image_alt) }}"
             />

        @endif
    @endforeach
    <section class="reports container containerEdit">
        <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">
            Stay up-to-date with your store reports
        </h2>
        <h3
            class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto"
            data-aos="fade-up"
            data-aos-delay="200"
        >
            We provide you with accurate and detailed reports up-to-date, and we
            keep you abreast of your store reports, and the following are the most
            important added reports
        </h3>
        <div class="grid align-items-center">
            <div class="g-col-12 g-col-xl-7" data-aos="fade-right">
                <div class="grid">
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start"
                            >
                                <svg
                                    class="svgPath"
                                    width="26"
                                    height="26"
                                    viewBox="0 0 26 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z"
                                    />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">Customer</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                We provide you with the number of your customers first with
                                the percentage of increase
                            </p>
                        </div>
                    </div>
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start"
                            >
                                <svg
                                    class="svgPath"
                                    width="26"
                                    height="26"
                                    viewBox="0 0 26 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z"
                                    />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">Orders</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                We provide you with the number of your orders firsthand with
                                the percentage of increase
                            </p>
                        </div>
                    </div>
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start"
                            >
                                <svg
                                    class="svgPath"
                                    width="26"
                                    height="26"
                                    viewBox="0 0 26 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z"
                                    />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">Income</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                We provide you with your income firsthand with the
                                percentage of increase
                            </p>
                        </div>
                    </div>
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start"
                            >
                                <svg
                                    class="svgPath"
                                    width="26"
                                    height="26"
                                    viewBox="0 0 26 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z"
                                    />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">Expneses</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                We provide you with your expenses firsthand with the
                                percentage of increase
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                data-aos="fade-left"
                data-aos-delay="200"
                class="g-col-12 g-col-xl-5 order-first order-xl-last d-flex justify-content-center justify-content-xl-start"
            >
                <img
                    class="img-fluid w-100 imgWidthInMobile"
                    src="{{asset('./main/assets/imgs/reportsImg.webp')}}"
                    alt="reportsImg-img"
                    width="444.7"
                    height="520.24"
                />
            </div>
        </div>
    </section>
    <section class="getStoreNow bg-f9 py-70">
        <div class="container containerEdit">
            <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">
                Get your free store now
            </h2>
            <h3
                class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                We offer over 20 types of stores and numerous high-quality, proven
                templates, along with comprehensive solutions for payment, shipping,
                and other e-commerce needs, all backed by fast and direct technical
                support.
            </h3>
            <div class="d-flex justify-content-center" data-aos="fade-up">
                <a
                    href="./create-store-1.html"
                    type="button"
                    class="primaryBtnHoverEffect transition-300ms text-decoration-none btn btn-primary text-capitalize m-0 py-15 px-25 rounded-8px"
                >
                    Create Your store now
                </a>
            </div>
        </div>
    </section>
    <section class="payment container containerEdit">
        <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">
            Payment solutions
        </h2>
        <h3
            class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto"
            data-aos="fade-up"
            data-aos-delay="200"
        >
            Create Your store, and get a free business account to receive your
            sales anytime, anywhere. along with local payment solutions and Visa ,
            MasterCard
        </h3>
        <div class="grid align-items-center">
            <div
                class="g-col-12 g-col-xl-5 d-flex justify-content-center justify-content-xl-start"
                data-aos="fade-right"
            >
                <img
                    class="img-fluid w-100 imgWidthInMobile"
                    src="{{asset('./main/assets/imgs/payment-img.webp')}}"
                    alt="payment-img"
                    width="444.69"
                    height="605.78"
                />
            </div>
            <div
                class="g-col-12 g-col-xl-7"
                data-aos="fade-left"
                data-aos-delay="200"
            >
                <div class="grid">
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start"
                            >
                                <svg
                                    class="svgPath"
                                    width="26"
                                    height="26"
                                    viewBox="0 0 26 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z"
                                    />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">business account</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                Once you create your store, you will receive a free verified
                                business account
                            </p>
                        </div>
                    </div>
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start"
                            >
                                <svg
                                    class="svgPath"
                                    width="26"
                                    height="26"
                                    viewBox="0 0 26 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z"
                                    />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">Payments solutions</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                Receive your sales anytime, anywhere along with local
                                payment solutions
                            </p>
                        </div>
                    </div>
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start"
                            >
                                <svg
                                    class="svgPath"
                                    width="26"
                                    height="26"
                                    viewBox="0 0 26 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z"
                                    />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">Secure payments</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                Protect your customers' information and your funds with
                                secure payment solutions .
                            </p>
                        </div>
                    </div>
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start"
                            >
                                <svg
                                    class="svgPath"
                                    width="26"
                                    height="26"
                                    viewBox="0 0 26 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z"
                                    />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">Great customer support</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                Our dedicated support team is always available to help
                                resolve any issues and answer all questions .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="best bg-f9 py-70">
        <div class="container containerEdit">
            <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">
                Why are we the best
            </h2>
            <h3
                class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                We have provided many advantages that increase the growth of your
                business and achieve your goals
            </h3>
            <div class="grid">
                <div class="grid g-col-12 g-col-xxl-4 gap-10" data-aos="fade-up">
                    <div
                        class="g-col-12 g-col-md-4 g-col-xxl-12 features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms p-20"
                    >
                        <div
                            class="features__boxSvg mx-auto mx-xxl-0 positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center"
                        >
                            <svg
                                class="svgPath"
                                width="28"
                                height="28"
                                viewBox="0 0 28 28"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M12.4624 27.2456C5.82286 26.4832 0.666687 20.8437 0.666687 14C0.666687 6.63616 6.63622 0.666626 14 0.666626C21.3638 0.666626 27.3334 6.63616 27.3334 14C27.3334 20.8753 22.9564 20.3099 19.2181 19.827C17.0619 19.5485 15.1182 19.2974 14.3492 20.5172C13.8233 21.3515 14.3918 22.3917 15.0891 23.089C15.9604 23.9603 15.9604 25.3729 15.0891 26.2442C14.3918 26.9415 13.4421 27.3581 12.4624 27.2456ZM12.78 7.33297C12.78 8.43754 11.8846 9.33297 10.78 9.33297C9.67545 9.33297 8.78002 8.43754 8.78002 7.33297C8.78002 6.2284 9.67545 5.33297 10.78 5.33297C11.8846 5.33297 12.78 6.2284 12.78 7.33297ZM6.66669 15.3333C7.77126 15.3333 8.66669 14.4378 8.66669 13.3333C8.66669 12.2287 7.77126 11.3333 6.66669 11.3333C5.56212 11.3333 4.66669 12.2287 4.66669 13.3333C4.66669 14.4378 5.56212 15.3333 6.66669 15.3333ZM21.3334 15.3333C22.4379 15.3333 23.3334 14.4378 23.3334 13.3333C23.3334 12.2287 22.4379 11.3333 21.3334 11.3333C20.2288 11.3333 19.3334 12.2287 19.3334 13.3333C19.3334 14.4378 20.2288 15.3333 21.3334 15.3333ZM17.3334 9.33327C18.4379 9.33327 19.3334 8.43784 19.3334 7.33327C19.3334 6.2287 18.4379 5.33327 17.3334 5.33327C16.2288 5.33327 15.3334 6.2287 15.3334 7.33327C15.3334 8.43784 16.2288 9.33327 17.3334 9.33327Z"
                                />
                            </svg>
                        </div>
                        <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">
                            Professional designs
                        </p>
                        <p class="mb-0 fs-14px text-center text-xxl-start">
                            We have provided you with a variety of highly professional
                            designs that achieve your business goals.
                        </p>
                    </div>
                    <div
                        class="g-col-12 g-col-md-4 g-col-xxl-12 features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms p-20"
                    >
                        <div
                            class="features__boxSvg mx-auto mx-xxl-0 positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center"
                        >
                            <svg
                                class="svgPath"
                                width="28"
                                height="28"
                                viewBox="0 0 29 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M26.1344 6.67138C26.0588 6.66661 25.9766 6.66664 25.8912 6.66667L25.87 6.66668H22.5253C19.7684 6.66668 17.4095 8.83676 17.4095 11.6667C17.4095 14.4966 19.7684 16.6667 22.5253 16.6667H25.87L25.8912 16.6667C25.9766 16.6667 26.0588 16.6667 26.1344 16.662C27.2542 16.5913 28.2445 15.7149 28.3278 14.491C28.3333 14.4107 28.3332 14.3242 28.3332 14.244L28.3331 14.2222V9.11112L28.3332 9.08936C28.3332 9.00917 28.3333 8.92266 28.3278 8.8424C28.2445 7.61841 27.2542 6.74209 26.1344 6.67138ZM22.2287 13C22.9385 13 23.5139 12.403 23.5139 11.6667C23.5139 10.9303 22.9385 10.3333 22.2287 10.3333C21.519 10.3333 20.9436 10.9303 20.9436 11.6667C20.9436 12.403 21.519 13 22.2287 13Z"
                                    fill="#F16645"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M25.8904 18.6667C26.0892 18.6615 26.2396 18.8457 26.1857 19.0371C25.918 19.987 25.4932 20.7966 24.8115 21.4783C23.8137 22.4762 22.5484 22.919 20.9852 23.1292C19.4662 23.3334 17.5254 23.3334 15.0751 23.3333H12.258C9.80761 23.3334 7.86676 23.3334 6.34781 23.1292C4.78458 22.919 3.51931 22.4762 2.5215 21.4783C1.52368 20.4805 1.08086 19.2153 0.870684 17.652C0.666467 16.1331 0.666483 14.1922 0.666504 11.7419V11.5914C0.666483 9.1411 0.666466 7.20026 0.870684 5.6813C1.08085 4.11807 1.52368 2.85281 2.52149 1.85499C3.51931 0.857174 4.78458 0.414351 6.34781 0.204181C7.86676 -3.70741e-05 9.8076 -2.03906e-05 12.2579 5.90187e-07L15.0751 4.31241e-07C17.5254 -2.0788e-05 19.4662 -3.77099e-05 20.9852 0.20418C22.5484 0.414351 23.8137 0.857173 24.8115 1.85499C25.4932 2.5367 25.918 3.34632 26.1857 4.29624C26.2396 4.48767 26.0892 4.67183 25.8904 4.66667L22.5252 4.66668C18.743 4.66668 15.4093 7.65455 15.4093 11.6667C15.4093 15.6788 18.743 18.6667 22.5252 18.6667L25.8904 18.6667ZM5.6665 5.33333C5.11422 5.33333 4.6665 5.78105 4.6665 6.33333C4.6665 6.88562 5.11422 7.33333 5.6665 7.33333H10.9998C11.5521 7.33333 11.9998 6.88562 11.9998 6.33333C11.9998 5.78105 11.5521 5.33333 10.9998 5.33333H5.6665Z"
                                    fill="#F16645"
                                />
                            </svg>
                        </div>
                        <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">
                            Excellent payment method
                        </p>
                        <p class="mb-0 fs-14px text-center text-xxl-start">
                            We have provided a secure payment method that provides you
                            with your store reports in one place
                        </p>
                    </div>
                    <div
                        class="g-col-12 g-col-md-4 g-col-xxl-12 features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms p-20"
                    >
                        <div
                            class="features__boxSvg mx-auto mx-xxl-0 positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center"
                        >
                            <svg
                                class="svgPath"
                                width="28"
                                height="28"
                                viewBox="0 0 25 28"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M12.5703 0.666016C11.0852 0.666016 9.73271 1.46696 7.02775 3.06883L6.11287 3.61062C3.40792 5.2125 2.05544 6.01344 1.31287 7.33268C0.570312 8.65192 0.570312 10.2538 0.570312 13.4576V14.5411C0.570312 17.7449 0.570312 19.3468 1.31287 20.666C2.05544 21.9853 3.40792 22.7862 6.11287 24.3881L7.02775 24.9299C9.73271 26.5317 11.0852 27.3327 12.5703 27.3327C14.0554 27.3327 15.4079 26.5317 18.1129 24.9299L19.0277 24.3881C21.7327 22.7862 23.0852 21.9853 23.8277 20.666C24.5703 19.3468 24.5703 17.7449 24.5703 14.5411V13.4576C24.5703 10.2538 24.5703 8.65192 23.8277 7.33268C23.0852 6.01344 21.7327 5.2125 19.0277 3.61062L18.1129 3.06883C15.4079 1.46696 14.0554 0.666016 12.5703 0.666016ZM7.57031 13.9993C7.57031 11.2379 9.80889 8.99935 12.5703 8.99935C15.3317 8.99935 17.5703 11.2379 17.5703 13.9993C17.5703 16.7608 15.3317 18.9993 12.5703 18.9993C9.80889 18.9993 7.57031 16.7608 7.57031 13.9993Z"
                                    fill="#F16645"
                                />
                            </svg>
                        </div>
                        <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">
                            Distinctive settings
                        </p>
                        <p class="mb-0 fs-14px text-center text-xxl-start">
                            We provided many distinct settings for greater control over
                            your store
                        </p>
                    </div>
                </div>
                <div
                    class="g-col-12 g-col-xxl-4 d-flex justify-content-center align-items-center"
                    data-aos="fade-up"
                >
                    <img
                        class="img-fluid"
                        src="{{asset('./main/assets/imgs/best-img.webp')}}"
                        alt="best-img"
                    />
                </div>
                <div class="grid g-col-12 g-col-xxl-4 gap-10" data-aos="fade-up">
                    <div
                        class="g-col-12 g-col-md-4 g-col-xxl-12 features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms p-20"
                    >
                        <div
                            class="features__boxSvg mx-auto mx-xxl-0 positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center"
                        >
                            <svg
                                class="svgPath"
                                width="28"
                                height="28"
                                viewBox="0 0 28 28"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M16.668 27.3327H11.3346C6.30632 27.3327 3.79216 27.3327 2.23007 25.7706C0.667969 24.2085 0.667969 21.6943 0.667969 16.666V11.3327C0.667969 6.30437 0.667969 3.79021 2.23007 2.22811C3.79216 0.666016 6.31956 0.666016 11.3744 0.666016C12.1824 0.666016 12.8298 0.666015 13.3746 0.688231C13.3567 0.794806 13.3473 0.903519 13.3469 1.01344L13.3346 4.79264C13.3345 6.25545 13.3344 7.5482 13.4745 8.59023C13.6264 9.71972 13.975 10.849 14.8967 11.7707C15.8184 12.6924 16.9477 13.0411 18.0772 13.193C19.1193 13.333 20.412 13.3329 21.8748 13.3328L22.0013 13.3328H27.2779C27.3346 14.0452 27.3346 14.9195 27.3346 16.0832V16.666C27.3346 21.6943 27.3346 24.2085 25.7725 25.7706C24.2104 27.3327 21.6963 27.3327 16.668 27.3327ZM5.0013 17.3327C5.0013 16.7804 5.44902 16.3327 6.0013 16.3327H16.668C17.2203 16.3327 17.668 16.7804 17.668 17.3327C17.668 17.885 17.2203 18.3327 16.668 18.3327H6.0013C5.44902 18.3327 5.0013 17.885 5.0013 17.3327ZM5.0013 21.9993C5.0013 21.4471 5.44902 20.9993 6.0013 20.9993H13.3346C13.8869 20.9993 14.3346 21.4471 14.3346 21.9993C14.3346 22.5516 13.8869 22.9993 13.3346 22.9993H6.0013C5.44902 22.9993 5.0013 22.5516 5.0013 21.9993Z"
                                    fill="#F16645"
                                />
                                <path
                                    d="M23.8036 8.15488L18.5252 3.40435C17.0214 2.05092 16.2695 1.37421 15.3469 1.02018L15.3346 4.66616C15.3346 7.80885 15.3346 9.3802 16.3109 10.3565C17.2873 11.3328 18.8586 11.3328 22.0013 11.3328H26.7748C26.2913 10.3939 25.4258 9.61487 23.8036 8.15488Z"
                                    fill="#F16645"
                                />
                            </svg>
                        </div>
                        <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">
                            Comprehensive reports
                        </p>
                        <p class="mb-0 fs-14px text-center text-xxl-start">
                            We have provided you with a detailed measure of the store's
                            performance accurately.
                        </p>
                    </div>
                    <div
                        class="g-col-12 g-col-md-4 g-col-xxl-12 features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms p-20"
                    >
                        <div
                            class="features__boxSvg mx-auto mx-xxl-0 positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center"
                        >
                            <svg
                                class="svgPath"
                                width="28"
                                height="28"
                                viewBox="0 0 28 28"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M16.1715 25.2951L15.4487 26.5163C14.8045 27.6047 13.1951 27.6047 12.5509 26.5163L11.8281 25.2951C11.2675 24.3479 10.9872 23.8744 10.5369 23.6125C10.0866 23.3506 9.51973 23.3408 8.38594 23.3213C6.71213 23.2924 5.66235 23.1899 4.78195 22.8252C3.14843 22.1486 1.8506 20.8508 1.17397 19.2172C0.666504 17.9921 0.666504 16.439 0.666504 13.3327V11.9993C0.666504 7.63477 0.666504 5.45249 1.6489 3.84936C2.19861 2.95232 2.95281 2.19812 3.84985 1.64841C5.45298 0.666016 7.63526 0.666016 11.9998 0.666016H15.9998C20.3644 0.666016 22.5467 0.666016 24.1498 1.64841C25.0469 2.19812 25.8011 2.95232 26.3508 3.84936C27.3332 5.45249 27.3332 7.63477 27.3332 11.9993V13.3327C27.3332 16.439 27.3332 17.9921 26.8257 19.2172C26.1491 20.8508 24.8512 22.1486 23.2177 22.8252C22.3373 23.1899 21.2875 23.2924 19.6137 23.3213C18.4799 23.3408 17.913 23.3506 17.4627 23.6125C17.0125 23.8743 16.7321 24.3479 16.1715 25.2951ZM8.6665 13.666C8.11422 13.666 7.6665 14.1137 7.6665 14.666C7.6665 15.2183 8.11422 15.666 8.6665 15.666H15.9998C16.5521 15.666 16.9998 15.2183 16.9998 14.666C16.9998 14.1137 16.5521 13.666 15.9998 13.666H8.6665ZM7.6665 9.99935C7.6665 9.44706 8.11422 8.99935 8.6665 8.99935H19.3332C19.8855 8.99935 20.3332 9.44706 20.3332 9.99935C20.3332 10.5516 19.8855 10.9993 19.3332 10.9993H8.6665C8.11422 10.9993 7.6665 10.5516 7.6665 9.99935Z"
                                    fill="#F16645"
                                />
                            </svg>
                        </div>
                        <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">
                            Connect with your customers
                        </p>
                        <p class="mb-0 fs-14px text-center text-xxl-start">
                            Communicate with your customers with ease and direct
                            communication that meets your needs.
                        </p>
                    </div>
                    <div
                        class="g-col-12 g-col-md-4 g-col-xxl-12 features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms p-20"
                    >
                        <div
                            class="features__boxSvg mx-auto mx-xxl-0 positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center"
                        >
                            <svg
                                class="svgPath"
                                width="28"
                                height="28"
                                viewBox="0 0 28 28"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M19.3332 18.3327C20.2536 18.3327 20.9998 17.5865 20.9998 16.666C20.9998 15.7455 20.2536 14.9993 19.3332 14.9993C18.4127 14.9993 17.6665 15.7455 17.6665 16.666C17.6665 17.5865 18.4127 18.3327 19.3332 18.3327Z"
                                    fill="#F16645"
                                />
                                <path
                                    d="M10.3332 11.3327C10.3332 10.4122 9.58698 9.66601 8.6665 9.66601C7.74603 9.66601 6.99984 10.4122 6.99984 11.3327C6.99984 12.2532 7.74603 12.9993 8.6665 12.9993C9.58698 12.9993 10.3332 12.2532 10.3332 11.3327Z"
                                    fill="#F16645"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M13.9998 27.3327C7.71444 27.3327 4.57175 27.3327 2.61913 25.3801C0.666504 23.4274 0.666504 20.2847 0.666504 13.9993C0.666504 7.71395 0.666504 4.57126 2.61912 2.61864C4.57175 0.666016 7.71444 0.666016 13.9998 0.666016C20.2852 0.666016 23.4279 0.666016 25.3805 2.61864C27.3332 4.57126 27.3332 7.71395 27.3332 13.9993C27.3332 20.2847 27.3332 23.4274 25.3805 25.3801C23.4279 27.3327 20.2852 27.3327 13.9998 27.3327ZM22.9998 16.666C22.9998 18.6911 21.3582 20.3327 19.3332 20.3327C17.3081 20.3327 15.6665 18.6911 15.6665 16.666C15.6665 14.641 17.3081 12.9993 19.3332 12.9993C21.3582 12.9993 22.9998 14.641 22.9998 16.666ZM8.6665 7.66602C10.6915 7.66602 12.3332 9.30764 12.3332 11.3327C12.3332 13.3577 10.6915 14.9993 8.6665 14.9993C6.64146 14.9993 4.99984 13.3577 4.99984 11.3327C4.99984 9.30764 6.64146 7.66602 8.6665 7.66602ZM19.3332 12.3327C18.7809 12.3327 18.3332 11.885 18.3332 11.3327V4.66602C18.3332 4.11373 18.7809 3.66602 19.3332 3.66602C19.8855 3.66602 20.3332 4.11373 20.3332 4.66602V11.3327C20.3332 11.885 19.8855 12.3327 19.3332 12.3327ZM7.6665 16.666C7.6665 16.1137 8.11422 15.666 8.6665 15.666C9.21879 15.666 9.6665 16.1137 9.6665 16.666L9.6665 23.3327C9.6665 23.885 9.21879 24.3327 8.6665 24.3327C8.11422 24.3327 7.6665 23.885 7.6665 23.3327L7.6665 16.666ZM19.3332 24.3327C18.7809 24.3327 18.3332 23.885 18.3332 23.3327V21.9993C18.3332 21.4471 18.7809 20.9993 19.3332 20.9993C19.8855 20.9993 20.3332 21.4471 20.3332 21.9993V23.3327C20.3332 23.885 19.8855 24.3327 19.3332 24.3327ZM7.6665 4.66602C7.6665 4.11373 8.11422 3.66602 8.6665 3.66602C9.21879 3.66602 9.6665 4.11373 9.6665 4.66602V5.99935C9.6665 6.55163 9.21879 6.99935 8.6665 6.99935C8.11422 6.99935 7.6665 6.55163 7.6665 5.99935V4.66602Z"
                                    fill="#F16645"
                                />
                            </svg>
                        </div>
                        <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">
                            Ease of managing your store
                        </p>
                        <p class="mb-0 fs-14px text-center text-xxl-start">
                            We have provided you with many features to manage your store,
                            products and customers
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners container containerEdit">
        <h2 class="fw-medium fs-40px mb-60 text-center" data-aos="fade-up">
            Success Partners
        </h2>
        <div class="swiper partnersSwiper" data-aos="fade-up">
            <div
                class="swiper-wrapper justify-content-xl-center align-items-center"
            >
                <div class="swiper-slide w-max-content">
                    <img
                        class="img-fluid w-100 partnersSwiper__img"
                        src="{{asset('./main/assets/imgs/partners-1.png')}}"
                        alt="partners-img"
                    />
                </div>
                <div class="swiper-slide w-max-content">
                    <img
                        class="img-fluid w-100 partnersSwiper__img"
                        src="{{asset('./main/assets/imgs/partners-2.png')}}"
                        alt="partners-img"
                    />
                </div>
                <div class="swiper-slide w-max-content">
                    <img
                        class="img-fluid w-100 partnersSwiper__img"
                        src="{{asset('./main/assets/imgs/partners-3.png')}}"
                        alt="partners-img"
                    />
                </div>
            </div>
        </div>
    </section>
    <section class="faq bg-f9 pt-70 pb-150">
        <div class="container containerEdit">
            <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">
                FAQ
            </h2>
            <h3
                class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                The most frequently asked question
            </h3>
            <div
                data-aos="fade-up"
                class="accordion grid column-gap-sm-30px row-gap-sm-30px"
                id="accordionForFAQ"
            >
                <div class="accordion__container g-col-12 g-col-xl-6">
                    <div class="accordion-item transition-300ms border-0 mb-30">
                        <h2 class="accordion-header rounded-0">
                            <button
                                class="accordion-button bg-transparent gap-5 shadow-none fs-16-med collapsed py-20 py-md-30 lh-base"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#accordionForFAQCollapseOne"
                                aria-expanded="false"
                                aria-controls="accordionForFAQCollapseOne"
                            >
                                What is Konin store and what does it do?
                            </button>
                        </h2>
                        <div
                            id="accordionForFAQCollapseOne"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionForFAQ"
                        >
                            <div class="accordion-body text-c83">
                                Konin store is a platform that allows individuals and
                                businesses to easily sell products and services online.
                                Konin store offers an integrated online store creation
                                service, you can add and update your products, choose a
                                suitable design for your storefront, and process payments
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item transition-300ms border-0 mb-30">
                        <h2 class="accordion-header rounded-0">
                            <button
                                class="accordion-button bg-transparent gap-5 shadow-none fs-16-med collapsed py-20 py-md-30 lh-base"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#accordionForFAQCollapseTwo"
                                aria-expanded="false"
                                aria-controls="accordionForFAQCollapseTwo"
                            >
                                What are the benefits of subscribing to the Konin store
                                platform?
                            </button>
                        </h2>
                        <div
                            id="accordionForFAQCollapseTwo"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionForFAQ"
                        >
                            <div class="accordion-body text-c83">
                                The Konin store platform provides its customers with several
                                important features such as a website in Arabic and English,
                                an application + to manage orders, offers and discounts
                                tools, and a business advisory service in the e-commerce
                                market.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item transition-300ms border-0">
                        <h2 class="accordion-header rounded-0">
                            <button
                                class="accordion-button bg-transparent gap-5 shadow-none fs-16-med collapsed py-20 py-md-30 lh-base"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#accordionForFAQCollapseThree"
                                aria-expanded="false"
                                aria-controls="accordionForFAQCollapseThree"
                            >
                                How can I subscribe to the Konin store platform?
                            </button>
                        </h2>
                        <div
                            id="accordionForFAQCollapseThree"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionForFAQ"
                        >
                            <div class="accordion-body text-c83">
                                The Konin store platform differs from other online store
                                building platforms in that it provides its customers with
                                the technology needed to build their store, in addition to
                                providing a commercial growth team that will help them
                                improve their services and develop their e-commerce.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__container g-col-12 g-col-xl-6">
                    <div class="accordion-item transition-300ms border-0 mb-30">
                        <h2 class="accordion-header rounded-0">
                            <button
                                class="accordion-button bg-transparent gap-5 shadow-none fs-16-med collapsed py-20 py-md-30 lh-base"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#accordionForFAQCollapseFour"
                                aria-expanded="false"
                                aria-controls="accordionForFAQCollapseFour"
                            >
                                How many products can merchants list on the platform?
                            </button>
                        </h2>
                        <div
                            id="accordionForFAQCollapseFour"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionForFAQ"
                        >
                            <div class="accordion-body text-c83">
                                There is no limited number of products that merchants can
                                list on their online stores after subscribing
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item transition-300ms border-0 mb-30">
                        <h2 class="accordion-header rounded-0">
                            <button
                                class="accordion-button bg-transparent gap-5 shadow-none fs-16-med collapsed py-20 py-md-30 lh-base"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#accordionForFAQCollapsefive"
                                aria-expanded="false"
                                aria-controls="accordionForFAQCollapsefive"
                            >
                                What is the commission charged by Konin store for building
                                online stores?
                            </button>
                        </h2>
                        <div
                            id="accordionForFAQCollapsefive"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionForFAQ"
                        >
                            <div class="accordion-body text-c83">
                                The Konin store platform does not charge any commission on
                                the sales of its customers, except for the subscription fee
                                required to activate their own stores.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item transition-300ms border-0">
                        <h2 class="accordion-header rounded-0">
                            <button
                                class="accordion-button bg-transparent gap-5 shadow-none fs-16-med collapsed py-20 py-md-30 lh-base"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#accordionForFAQCollapseSix"
                                aria-expanded="false"
                                aria-controls="accordionForFAQCollapseSix"
                            >
                                How is the Konin store platform different from its
                                competitors?
                            </button>
                        </h2>
                        <div
                            id="accordionForFAQCollapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionForFAQ"
                        >
                            <div class="accordion-body text-c83">
                                You can register by contacting us from
                                <a href="./help.html" class="text-c1d text-decoration-none"
                                >here</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

