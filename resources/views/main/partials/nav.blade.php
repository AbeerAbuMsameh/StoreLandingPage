<nav class="navbar mainNavbar navbar-expand-lg fixed-top py-32">
    <div class="container containerEdit">
        {{-- Store Logo--}}
        <a class="navbar-brand p-0 m-0 flex-shrink-0" href="{{route('main.home')}}">
            <img class="navbar-logo-home" src="{{ asset('./main/assets/imgs/navbar-logo-home-page.svg') }}" alt="navbar-logo-home"/>
            <img class="navbar-logo-pages" src="{{ asset('./main/assets/imgs/navbar-logo-pages.svg') }}" alt="navbar-logo-pages"/>
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMainNavbar" aria-controls="offcanvasMainNavbar"
                aria-label="Toggle navigation">
            <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                 class="svgPrimaryStroke">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
        <div class="offcanvas mainNavbar__offcanvas offcanvas-end" tabindex="-1" id="offcanvasMainNavbar"
             aria-labelledby="offcanvasMainNavbarLabel">
            <div class="offcanvas-header justify-content-center position-relative p-0">
                <a class="navbar-brand p-0 m-0 my-50 flex-shrink-0" href="{{route('main.home')}}">
                    <img class="img-fluid mainNavbar__logo d-none d-lg-block"
                         src="{{asset('./main/assets/imgs/navbar-Logo.png')}}" alt="navbar-logo" width="100.64"
                         height="43"/>
                    <svg class="d-block d-lg-none" width="26" height="41" viewBox="0 0 26 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.7975 20.3765C18.0157 18.0424 20.6347 14.9788 22.4399 11.4368C24.2451 7.89488 25.1851 3.97546 25.1827 0H15.5672C15.5672 2.04393 15.1646 4.06785 14.3825 5.9562C13.6003 7.84455 12.4538 9.56035 11.0086 11.0056C9.56328 12.4509 7.84748 13.5974 5.95913 14.3795C4.07078 15.1617 2.04686 15.5643 0.00292969 15.5643V25.1857C2.04686 25.1857 4.07078 25.5883 5.95913 26.3705C7.84748 27.1526 9.56328 28.2991 11.0086 29.7444C12.4538 31.1897 13.6003 32.9055 14.3825 34.7938C15.1646 36.6822 15.5672 38.7061 15.5672 40.75H25.1857C25.1872 36.7748 24.2466 32.8558 22.4409 29.3144C20.6352 25.773 18.0158 22.7099 14.7975 20.3765Z"
                            fill="#42538D"/>
                        <path
                            d="M3.67553 40.7534C5.70547 40.7534 7.35106 39.1078 7.35106 37.0779C7.35106 35.0479 5.70547 33.4023 3.67553 33.4023C1.64559 33.4023 0 35.0479 0 37.0779C0 39.1078 1.64559 40.7534 3.67553 40.7534Z"
                            fill="#F16645"/>
                    </svg>
                </a>
                <button type="button" class="btn-close shadow-none position-absolute top-0 end-0 mt-25 me-25"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            {{-- Header Menu--}}
            <div class="offcanvas-body justify-content-lg-between">
                {{-- Fixed Menu--}}
                <ul class="navbar-nav gap-30 gap-lg-15 gap-xl-25 justify-content-center justify-content-lg-start ms-md-20 ms-lg-25 ms-xl-50 ms-xxl-150">
                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a class="nav-link mainNavbar__menuLink p-0 m-0 text-white colorLinksUnderLg"
                           href="{{route('main.pricing')}}">{{__('main.pricing')}}</a>
                    </li>
                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a class="nav-link mainNavbar__menuLink p-0 m-0 text-white colorLinksUnderLg"
                           href="{{route('main.templates')}}">{{__('main.templates')}}</a>
                    </li>
                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a class="nav-link mainNavbar__menuLink p-0 m-0 text-white colorLinksUnderLg"
                           href="{{route('main.help')}}">{{__('main.help')}}</a>
                    </li>
                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a class="nav-link mainNavbar__menuLink p-0 m-0 text-white colorLinksUnderLg"
                           href="{{route('main.countries')}}">{{__('main.countries')}}</a>
                    </li>
                </ul>
                {{-- Languages Menu--}}
                <div class="d-flex flex-column flex-lg-row gap-10 gap-lg-25 gap-xl-40 align-items-center mt-50 mt-lg-0">
                    <div class="dropdown dropdownLang d-flex align-items-center border-color-ef rounded-pill">
                        <button
                            class="btn bg-transparent px-9 py-9 w-100 h-100 border-0 dropdown-toggle direction-initial d-flex gap-8 align-items-center justify-content-between"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span>
                <img width="24" height="24" src="{{ Storage::url($languages->where('code', LaravelLocalization::getCurrentLocale())->first()->flag) }}" alt="flag"/>
            </span>
                            <span class="fw-med text-capitalize fs-14px text-white colorLinksUnderLg">{{ LaravelLocalization::getCurrentLocaleNative() }}</span>
                        </button>
                        <ul class="dropdown-menu mainNavbar__LangMenu py-0 overflow-hidden">
                            @foreach($languages as $language)
                                <li>
                                    <a class="dropdown-item py-10 d-flex gap-8 align-items-center border-bottom border-primary"
                                       href="{{ LaravelLocalization::getLocalizedURL($language->code, null, [], true) }}">
                        <span>
                            <img width="24" height="24" src="{{ Storage::url($language->flag) }}" alt="{{ $language->code }}-flag"/>
                        </span>
                                        <span class="fw-med text-capitalize fs-14px">{{ $language->lang }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <a href="{{env('APP_VENDOR_DASHBOARD_URL')}}" type="button"
                       class="outlineBtnHoverEffect transition-300ms fw-medium d-flex align-items-center justify-content-center fs-14px text-decoration-none btn btn-link py-15 px-25 text-white colorLinksUnderLg">{{__('main.log_in')}}</a>
                    <a href="{{route('main.create-store')}}" type="button"
                       class="primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn btn-primary m-0 py-15 px-25">{{__('main.get_started')}}</a>
                </div>
            </div>
        </div>
</nav>
