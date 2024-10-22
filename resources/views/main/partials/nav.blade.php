<nav class="navbar mainNavbar navbar-expand-lg fixed-top py-32">
    <div class="container containerEdit">
        {{-- Store Logo--}}
        <a class="navbar-brand p-0 m-0 flex-shrink-0" href={{route('main.home')}}>
            <svg width="102" height="43" viewBox="0 0 102 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M101.389 17.1958H98.3964L91.6193 6.95531V17.1958H88.6262V2.25195H91.6193L98.3964 12.5138V2.25195H101.389V17.1958Z" fill="#42538D"></path>
                <path d="M85.6691 2.27344V17.1959H82.676V2.27344H85.6691Z" fill="#42538D"></path>
                <path d="M79.718 17.1958H76.725L69.9479 6.95531V17.1958H66.9548V2.25195H69.9479L76.725 12.5138V2.25195H79.718V17.1958Z" fill="#42538D"></path>
                <path d="M57.0958 17.3465C55.699 17.3465 54.4163 17.0187 53.2476 16.363C52.0789 15.7074 51.1525 14.8024 50.4683 13.6479C49.7842 12.4792 49.4421 11.1608 49.4421 9.69282C49.4421 8.23905 49.7842 6.93494 50.4683 5.78048C51.1525 4.61176 52.0789 3.6996 53.2476 3.04398C54.4163 2.38836 55.699 2.06055 57.0958 2.06055C58.5068 2.06055 59.7895 2.38836 60.944 3.04398C62.1127 3.6996 63.032 4.61176 63.7019 5.78048C64.386 6.93494 64.7281 8.23905 64.7281 9.69282C64.7281 11.1608 64.386 12.4792 63.7019 13.6479C63.032 14.8024 62.1127 15.7074 60.944 16.363C59.7753 17.0187 58.4925 17.3465 57.0958 17.3465ZM57.0958 14.6741C57.9937 14.6741 58.7847 14.4746 59.4689 14.0755C60.153 13.6622 60.6874 13.0778 61.0723 12.3224C61.4571 11.567 61.6495 10.6905 61.6495 9.69282C61.6495 8.69514 61.4571 7.82573 61.0723 7.08459C60.6874 6.3292 60.153 5.75197 59.4689 5.3529C58.7847 4.95383 57.9937 4.75429 57.0958 4.75429C56.1979 4.75429 55.3997 4.95383 54.7014 5.3529C54.0172 5.75197 53.4828 6.3292 53.0979 7.08459C52.7131 7.82573 52.5207 8.69514 52.5207 9.69282C52.5207 10.6905 52.7131 11.567 53.0979 12.3224C53.4828 13.0778 54.0172 13.6622 54.7014 14.0755C55.3997 14.4746 56.1979 14.6741 57.0958 14.6741Z" fill="#42538D"></path>
                <path d="M44.4165 17.1959L38.9862 10.5471V17.1959H35.9932V2.27344H38.9862V8.96504L44.4165 2.27344H48.0295L41.8724 9.67054L48.2005 17.1959H44.4165Z" fill="#42538D"></path>
                <path d="M94.8341 30.3454V34.0867H99.8582V36.4598H94.8341V40.4149H100.5V42.8521H91.8411V27.9082H100.5V30.3454H94.8341Z" fill="#42538D"></path>
                <path d="M85.8414 42.8502L82.5491 37.0352H81.1381V42.8502H78.145V27.9277H83.7463C84.9008 27.9277 85.8842 28.1344 86.6966 28.5477C87.509 28.9468 88.1147 29.4955 88.5138 30.1939C88.9271 30.878 89.1338 31.6477 89.1338 32.5028C89.1338 33.4863 88.8487 34.377 88.2786 35.1752C87.7085 35.9591 86.8605 36.5007 85.7345 36.8L89.3048 42.8502H85.8414ZM81.1381 34.7904H83.6394C84.4518 34.7904 85.0575 34.598 85.4566 34.2131C85.8557 33.8141 86.0552 33.2653 86.0552 32.567C86.0552 31.8828 85.8557 31.3555 85.4566 30.9849C85.0575 30.6001 84.4518 30.4077 83.6394 30.4077H81.1381V34.7904Z" fill="#42538D"></path>
                <path d="M68.286 43.0008C66.8892 43.0008 65.6065 42.673 64.4378 42.0173C63.2691 41.3617 62.3426 40.4567 61.6585 39.3022C60.9744 38.1335 60.6323 36.8151 60.6323 35.3471C60.6323 33.8934 60.9744 32.5892 61.6585 31.4348C62.3426 30.2661 63.2691 29.3539 64.4378 28.6983C65.6065 28.0427 66.8892 27.7148 68.286 27.7148C69.697 27.7148 70.9797 28.0427 72.1342 28.6983C73.3029 29.3539 74.2222 30.2661 74.8921 31.4348C75.5762 32.5892 75.9183 33.8934 75.9183 35.3471C75.9183 36.8151 75.5762 38.1335 74.8921 39.3022C74.2222 40.4567 73.3029 41.3617 72.1342 42.0173C70.9655 42.673 69.6827 43.0008 68.286 43.0008ZM68.286 40.3284C69.1839 40.3284 69.9749 40.1289 70.659 39.7298C71.3432 39.3165 71.8776 38.7321 72.2625 37.9767C72.6473 37.2213 72.8397 36.3448 72.8397 35.3471C72.8397 34.3494 72.6473 33.48 72.2625 32.7389C71.8776 31.9835 71.3432 31.4063 70.659 31.0072C69.9749 30.6081 69.1839 30.4086 68.286 30.4086C67.3881 30.4086 66.5899 30.6081 65.8915 31.0072C65.2074 31.4063 64.6729 31.9835 64.2881 32.7389C63.9033 33.48 63.7109 34.3494 63.7109 35.3471C63.7109 36.3448 63.9033 37.2213 64.2881 37.9767C64.6729 38.7321 65.2074 39.3165 65.8915 39.7298C66.5899 40.1289 67.3881 40.3284 68.286 40.3284Z" fill="#42538D"></path>
                <path d="M59.1755 27.9277V30.3436H55.199V42.8502H52.206V30.3436H48.2295V27.9277H59.1755Z" fill="#42538D"></path>
                <path d="M41.1453 43.0008C40.1049 43.0008 39.1642 42.8226 38.3233 42.4663C37.4966 42.11 36.841 41.5969 36.3564 40.927C35.8718 40.2571 35.6224 39.4661 35.6082 38.554H38.815C38.8577 39.1668 39.0715 39.6514 39.4564 40.0077C39.8554 40.364 40.397 40.5422 41.0812 40.5422C41.7795 40.5422 42.3283 40.3783 42.7273 40.0505C43.1264 39.7084 43.3259 39.2666 43.3259 38.725C43.3259 38.2832 43.1905 37.9197 42.9197 37.6347C42.6489 37.3496 42.3069 37.1287 41.8936 36.9719C41.4945 36.8009 40.9386 36.6156 40.226 36.4161C39.2568 36.131 38.4658 35.8531 37.8529 35.5823C37.2543 35.2972 36.7341 34.8768 36.2923 34.3209C35.8647 33.7508 35.6509 32.9954 35.6509 32.0548C35.6509 31.1711 35.8718 30.4015 36.3137 29.7458C36.7555 29.0902 37.3755 28.5914 38.1736 28.2493C38.9718 27.893 39.8839 27.7148 40.9101 27.7148C42.4494 27.7148 43.6965 28.0925 44.6514 28.8479C45.6206 29.5891 46.1551 30.6295 46.2549 31.9692H42.9625C42.934 31.4562 42.7131 31.0357 42.2998 30.7079C41.9007 30.3658 41.3662 30.1948 40.6963 30.1948C40.112 30.1948 39.6416 30.3444 39.2853 30.6438C38.9433 30.9431 38.7722 31.3778 38.7722 31.9479C38.7722 32.3469 38.9005 32.6819 39.1571 32.9527C39.4279 33.2092 39.7557 33.423 40.1405 33.594C40.5396 33.7508 41.0954 33.9361 41.808 34.1499C42.7772 34.4349 43.5682 34.72 44.1811 35.0051C44.794 35.2901 45.3213 35.7177 45.7631 36.2878C46.205 36.8579 46.4259 37.6062 46.4259 38.5326C46.4259 39.3307 46.2192 40.0719 45.8059 40.756C45.3926 41.4401 44.7868 41.9888 43.9887 42.4022C43.1905 42.8012 42.2427 43.0008 41.1453 43.0008Z" fill="#42538D"></path>
                <path d="M15.5436 20.3765C18.7617 18.0424 21.3808 14.9788 23.186 11.4368C24.9912 7.89488 25.9312 3.97546 25.9288 0H16.3133C16.3133 2.04393 15.9107 4.06785 15.1286 5.9562C14.3464 7.84455 13.1999 9.56035 11.7547 11.0056C10.3094 12.4509 8.59357 13.5974 6.70523 14.3795C4.81688 15.1617 2.79296 15.5643 0.749023 15.5643V25.1857C2.79296 25.1857 4.81688 25.5883 6.70523 26.3705C8.59357 27.1526 10.3094 28.2991 11.7547 29.7444C13.1999 31.1897 14.3464 32.9055 15.1286 34.7938C15.9107 36.6822 16.3133 38.7061 16.3133 40.75H25.9317C25.9333 36.7748 24.9927 32.8558 23.187 29.3144C21.3813 25.773 18.7619 22.7099 15.5436 20.3765Z" fill="#42538D"></path>
                <path d="M4.42162 40.7534C6.45156 40.7534 8.09715 39.1078 8.09715 37.0779C8.09715 35.0479 6.45156 33.4023 4.42162 33.4023C2.39168 33.4023 0.746094 35.0479 0.746094 37.0779C0.746094 39.1078 2.39168 40.7534 4.42162 40.7534Z" fill="#F16645"></path>
            </svg>
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMainNavbar" aria-controls="offcanvasMainNavbar" aria-label="Toggle navigation">
            <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" class="svgPrimaryStroke">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
        <div class="offcanvas mainNavbar__offcanvas offcanvas-end" tabindex="-1" id="offcanvasMainNavbar" aria-labelledby="offcanvasMainNavbarLabel">
            <div class="offcanvas-header justify-content-center position-relative p-0">
                <a class="navbar-brand p-0 m-0 my-50 flex-shrink-0" href="{{route('main.home')}}">
                    <img class="img-fluid mainNavbar__logo d-none d-lg-block" src="{{asset('./main/assets/imgs/navbar-Logo.png')}}" alt="navbar-logo" width="100.64" height="43"/>
                    <svg class="d-block d-lg-none" width="26" height="41" viewBox="0 0 26 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7975 20.3765C18.0157 18.0424 20.6347 14.9788 22.4399 11.4368C24.2451 7.89488 25.1851 3.97546 25.1827 0H15.5672C15.5672 2.04393 15.1646 4.06785 14.3825 5.9562C13.6003 7.84455 12.4538 9.56035 11.0086 11.0056C9.56328 12.4509 7.84748 13.5974 5.95913 14.3795C4.07078 15.1617 2.04686 15.5643 0.00292969 15.5643V25.1857C2.04686 25.1857 4.07078 25.5883 5.95913 26.3705C7.84748 27.1526 9.56328 28.2991 11.0086 29.7444C12.4538 31.1897 13.6003 32.9055 14.3825 34.7938C15.1646 36.6822 15.5672 38.7061 15.5672 40.75H25.1857C25.1872 36.7748 24.2466 32.8558 22.4409 29.3144C20.6352 25.773 18.0158 22.7099 14.7975 20.3765Z" fill="#42538D"/>
                        <path d="M3.67553 40.7534C5.70547 40.7534 7.35106 39.1078 7.35106 37.0779C7.35106 35.0479 5.70547 33.4023 3.67553 33.4023C1.64559 33.4023 0 35.0479 0 37.0779C0 39.1078 1.64559 40.7534 3.67553 40.7534Z" fill="#F16645"/>
                    </svg>
                </a>
                <button type="button" class="btn-close shadow-none position-absolute top-0 end-0 mt-25 me-25" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            {{-- Header Menu--}}
            <div class="offcanvas-body justify-content-lg-between">
                {{-- Fixed Menu--}}
                <ul class="navbar-nav gap-30 gap-lg-15 gap-xl-25 justify-content-center justify-content-lg-start ms-md-20 ms-lg-25 ms-xl-50 ms-xxl-150">
                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a class="nav-link mainNavbar__menuLink p-0 m-0 text-white colorLinksUnderLg" href="{{route('main.pricing')}}">{{__('main.pricing')}}</a>
                    </li>
                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a class="nav-link mainNavbar__menuLink p-0 m-0 text-white colorLinksUnderLg" href="{{route('main.templates')}}">{{__('main.templates')}}</a>
                    </li>
                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a class="nav-link mainNavbar__menuLink p-0 m-0 text-white colorLinksUnderLg" href="{{route('main.help')}}">{{__('main.help')}}</a>
                    </li>
                    <li class="nav-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <a class="nav-link mainNavbar__menuLink p-0 m-0 text-white colorLinksUnderLg" href="{{route('main.countries')}}">{{__('main.countries')}}</a>
                    </li>
                </ul>
                {{-- Languages Menu--}}
                <div class="d-flex flex-column flex-lg-row gap-10 gap-lg-25 gap-xl-40 align-items-center mt-50 mt-lg-0">
                    <div class="dropdown dropdownLang d-flex align-items-center border-color-ef rounded-pill">
                        <button class="btn bg-transparent px-9 py-9 w-100 h-100 border-0 dropdown-toggle direction-initial d-flex gap-8 align-items-center justify-content-between" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                            <img width="24" height="24" src="{{asset('./main/assets/imgs/en-flag.png')}}" alt="en-flag"/>
                        </span>
                        <span class="fw-med text-capitalize fs-14px text-white colorLinksUnderLg"> {{ LaravelLocalization::getCurrentLocaleNative() }}</span>
                        </button>
                        <ul class="dropdown-menu mainNavbar__LangMenu py-0 overflow-hidden">
                            <li>
                                <a class="dropdown-item py-10 d-flex gap-8 align-items-center border-bottom border-primary" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                    <span>
                                       <img width="24" height="24" src="{{asset('./main/assets/imgs/en-flag.png')}}" alt="en-flage"/>
                                    </span>
                                    <span class="fw-med text-capitalize fs-14px">English</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-10 d-flex gap-8 align-items-med fw-medium fs-14px" href=""{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                    <span>
                                        <img class="rounded-circle" width="24" height="24" src="{{asset('./main/assets/imgs/ar-flage.png')}}" alt="ar-flage"/></span>
                                    <span class="fw-med text-capitalize fs-14px">Arabic</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{env('APP_VENDOR_DASHBOARD_URL')}}" type="button" class="outlineBtnHoverEffect transition-300ms fw-medium d-flex align-items-center justify-content-center fs-14px text-decoration-none btn btn-link py-15 px-25 text-white colorLinksUnderLg">{{__('main.log_in')}}</a>
                    <a href="{{route('main.create-store')}}" type="button" class="primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn btn-primary m-0 py-15 px-25">{{__('main.get_started')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>