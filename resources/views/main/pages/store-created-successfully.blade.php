@extends('main.layouts.create-store')

@section('navigation')
    @include('main.partials.light-nav')
@endsection

@push('style')
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <!-- pricing page css arabic -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/create-store.rtl.min.css')}} />
    @else
        <!-- pricing page css english -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/create-store.min.css')}} />
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"/>
@endpush

@section('content')
    <main class="mainContent p-0 mb-100 mb-md-120">
        <section class="createStore createStoreOne container containerEdit pt-40 pt-md-80 text-center">
            <svg class="mb-40" data-aos="fade-down" width="150" viewBox="0 0 150 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M149.799 25.5955H145.344L135.257 10.3539V25.5955H130.802V3.35352H135.257L145.344 18.627V3.35352H149.799V25.5955Z" fill="#1C1C1C"/>
                <path d="M126.402 3.38477V25.5949H121.948V3.38477H126.402Z" fill="#1C1C1C"/>
                <path d="M117.543 25.5955H113.088L103.001 10.3539V25.5955H98.5466V3.35352H103.001L113.088 18.627V3.35352H117.543V25.5955Z" fill="#1C1C1C"/>
                <path d="M83.8741 25.8175C81.7952 25.8175 79.8861 25.3296 78.1466 24.3538C76.4071 23.378 75.0282 22.031 74.01 20.3127C72.9918 18.5732 72.4827 16.611 72.4827 14.4261C72.4827 12.2623 72.9918 10.3213 74.01 8.60304C75.0282 6.86356 76.4071 5.50592 78.1466 4.53011C79.8861 3.55431 81.7952 3.06641 83.8741 3.06641C85.9742 3.06641 87.8834 3.55431 89.6017 4.53011C91.3412 5.50592 92.7094 6.86356 93.7064 8.60304C94.7247 10.3213 95.2338 12.2623 95.2338 14.4261C95.2338 16.611 94.7247 18.5732 93.7064 20.3127C92.7094 22.031 91.3412 23.378 89.6017 24.3538C87.8622 25.3296 85.953 25.8175 83.8741 25.8175ZM83.8741 21.84C85.2106 21.84 86.3879 21.5431 87.4061 20.9491C88.4244 20.3339 89.2199 19.4642 89.7926 18.3399C90.3654 17.2156 90.6517 15.911 90.6517 14.4261C90.6517 12.9411 90.3654 11.6471 89.7926 10.544C89.2199 9.41974 88.4244 8.56061 87.4061 7.96664C86.3879 7.37268 85.2106 7.07569 83.8741 7.07569C82.5377 7.07569 81.3498 7.37268 80.3103 7.96664C79.2921 8.56061 78.4966 9.41974 77.9238 10.544C77.3511 11.6471 77.0647 12.9411 77.0647 14.4261C77.0647 15.911 77.3511 17.2156 77.9238 18.3399C78.4966 19.4642 79.2921 20.3339 80.3103 20.9491C81.3498 21.5431 82.5377 21.84 83.8741 21.84Z" fill="#1C1C1C"/>
                <path d="M65.0022 25.5949L56.92 15.699V25.5949H52.4652V3.38477H56.92V13.3443L65.0022 3.38477H70.3797L61.2157 14.3944L70.6343 25.5949H65.0022Z" fill="#1C1C1C"/>
                <path d="M140.045 45.1626V50.7311H147.522V54.263H140.045V60.1497H148.477V63.7771H135.59V41.5352H148.477V45.1626H140.045Z" fill="#1C1C1C"/>
                <path d="M126.655 63.7766L121.755 55.1216H119.655V63.7766H115.2V41.5664H123.537C125.255 41.5664 126.719 41.874 127.928 42.4892C129.137 43.0831 130.039 43.8999 130.633 44.9393C131.248 45.9575 131.556 47.103 131.556 48.3758C131.556 49.8395 131.131 51.1654 130.283 52.3533C129.434 53.52 128.172 54.3261 126.496 54.7716L131.81 63.7766H126.655ZM119.655 51.7805H123.378C124.587 51.7805 125.489 51.4942 126.083 50.9214C126.677 50.3274 126.974 49.5107 126.974 48.4713C126.974 47.4531 126.677 46.6682 126.083 46.1166C125.489 45.5439 124.587 45.2575 123.378 45.2575H119.655V51.7805Z" fill="#1C1C1C"/>
                <path d="M100.528 63.9992C98.4489 63.9992 96.5397 63.5113 94.8003 62.5354C93.0608 61.5596 91.6819 60.2126 90.6637 58.4943C89.6455 56.7549 89.1364 54.7926 89.1364 52.6077C89.1364 50.4439 89.6455 48.5029 90.6637 46.7847C91.6819 45.0452 93.0608 43.6876 94.8003 42.7118C96.5397 41.7359 98.4489 41.248 100.528 41.248C102.628 41.248 104.537 41.7359 106.255 42.7118C107.995 43.6876 109.363 45.0452 110.36 46.7847C111.378 48.5029 111.887 50.4439 111.887 52.6077C111.887 54.7926 111.378 56.7549 110.36 58.4943C109.363 60.2126 107.995 61.5596 106.255 62.5354C104.516 63.5113 102.607 63.9992 100.528 63.9992ZM100.528 60.0217C101.864 60.0217 103.042 59.7247 104.06 59.1307C105.078 58.5156 105.874 57.6458 106.446 56.5215C107.019 55.3972 107.305 54.0926 107.305 52.6077C107.305 51.1228 107.019 49.8288 106.446 48.7257C105.874 47.6014 105.078 46.7423 104.06 46.1483C103.042 45.5543 101.864 45.2573 100.528 45.2573C99.1914 45.2573 98.0034 45.5543 96.964 46.1483C95.9458 46.7423 95.1503 47.6014 94.5775 48.7257C94.0048 49.8288 93.7184 51.1228 93.7184 52.6077C93.7184 54.0926 94.0048 55.3972 94.5775 56.5215C95.1503 57.6458 95.9458 58.5156 96.964 59.1307C98.0034 59.7247 99.1914 60.0217 100.528 60.0217Z" fill="#1C1C1C"/>
                <path d="M86.9688 41.5664V45.162H81.0503V63.7766H76.5955V45.162H70.6771V41.5664H86.9688Z" fill="#1C1C1C"/>
                <path d="M60.1335 63.9992C58.585 63.9992 57.1849 63.734 55.9333 63.2037C54.703 62.6733 53.7271 61.9097 53.0059 60.9126C52.2847 59.9156 51.9134 58.7383 51.8922 57.3806H56.6652C56.7288 58.2928 57.047 59.0141 57.6198 59.5444C58.2137 60.0747 59.0198 60.3399 60.0381 60.3399C61.0775 60.3399 61.8942 60.0959 62.4882 59.608C63.0822 59.0989 63.3791 58.4413 63.3791 57.6352C63.3791 56.9776 63.1776 56.4367 62.7746 56.0124C62.3715 55.5881 61.8624 55.2593 61.2472 55.026C60.6532 54.7714 59.8259 54.4957 58.7653 54.1987C57.3228 53.7744 56.1455 53.3608 55.2333 52.9577C54.3423 52.5334 53.5681 51.9077 52.9104 51.0803C52.274 50.2318 51.9559 49.1075 51.9559 47.7075C51.9559 46.3922 52.2847 45.2467 52.9423 44.2709C53.5999 43.2951 54.5226 42.5527 55.7106 42.0435C56.8985 41.5132 58.2562 41.248 59.7835 41.248C62.0745 41.248 63.9307 41.8102 65.352 42.9345C66.7945 44.0376 67.5899 45.5861 67.7384 47.5802H62.8382C62.7958 46.8165 62.467 46.1907 61.8518 45.7028C61.2578 45.1937 60.4623 44.9391 59.4653 44.9391C58.5956 44.9391 57.8955 45.1619 57.3652 45.6073C56.8561 46.0528 56.6015 46.6998 56.6015 47.5484C56.6015 48.1423 56.7925 48.6408 57.1743 49.0439C57.5773 49.4257 58.0652 49.7439 58.638 49.9985C59.232 50.2318 60.0593 50.5076 61.1199 50.8258C62.5624 51.25 63.7398 51.6743 64.6519 52.0986C65.5641 52.5228 66.349 53.1592 67.0066 54.0078C67.6642 54.8563 67.993 55.97 67.993 57.3488C67.993 58.5368 67.6854 59.6399 67.0702 60.6581C66.455 61.6763 65.5535 62.493 64.3655 63.1082C63.1776 63.7022 61.7669 63.9992 60.1335 63.9992Z" fill="#1C1C1C"/>
                <path d="M22.0257 30.3278C26.8154 26.8538 30.7136 22.294 33.4004 17.0223C36.0872 11.7505 37.4862 5.91695 37.4826 0H23.1713C23.1713 3.04213 22.5721 6.05447 21.4079 8.86503C20.2437 11.6756 18.5374 14.2293 16.3863 16.3804C14.2352 18.5316 11.6814 20.2379 8.87086 21.4021C6.0603 22.5663 3.04796 23.1654 0.00582886 23.1654V37.4857C3.04796 37.4857 6.0603 38.0848 8.87086 39.249C11.6814 40.4132 14.2352 42.1195 16.3863 44.2707C18.5374 46.4218 20.2437 48.9755 21.4079 51.7861C22.5721 54.5966 23.1713 57.609 23.1713 60.6511H37.487C37.4894 54.7345 36.0894 48.9016 33.4018 43.6307C30.7143 38.3597 26.8156 33.8008 22.0257 30.3278Z" fill="#42538D"/>
                <path d="M5.47055 60.6559C8.49184 60.6559 10.9411 58.2067 10.9411 55.1854C10.9411 52.1641 8.49184 49.7148 5.47055 49.7148C2.44925 49.7148 0 52.1641 0 55.1854C0 58.2067 2.44925 60.6559 5.47055 60.6559Z" fill="#F16645"/>
            </svg>
            <h1 class="createStore__title fs-28px fw-medium mb-50 lh-sm" data-aos="fade-up" data-aos-delay="200">
                {{__('main.create_your_own_store_for_free_at_minutes')}}
            </h1>
            <div class="grid gap-20 gap-md-50">
                <div
                    class="createStore__steps g-col-12 g-col-xl-5 h-max-content bg-white p-25 p-sm-44 rounded-32px"
                    data-aos="fade-right"
                    data-aos-delay="400"
                >
                    <h4 class="createStore__steps--step d-flex gap-13 text-decoration-none mb-0">
                        <div class="stepSvg">
                            <svg width="24" height="66" viewBox="0 0 24 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2381_16714)">
                                    <rect width="24" height="24" rx="12" fill="#F16645" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.38967L9.93638 14.2997L8.03638 12.2697C7.68638 11.9397 7.13638 11.9197 6.73638 12.1997C6.34638 12.4897 6.23638 12.9997 6.47638 13.4097L8.72638 17.0697C8.94638 17.4097 9.32638 17.6197 9.75638 17.6197C10.1664 17.6197 10.5564 17.4097 10.7764 17.0697C11.1364 16.5997 18.0064 8.40967 18.0064 8.40967C18.9064 7.48967 17.8164 6.67967 17.0964 7.37967V7.38967Z" fill="white"/>
                                </g>
                                <rect x="11" y="28" width="2" height="34" rx="1" fill="#F16645"/>
                                <defs>
                                    <clipPath id="clip0_2381_16714">
                                        <rect width="24" height="24" rx="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="createStore__steps--titles text-start">
                            <p class="mb-0 fs-14px fw-medium mt-7 text-c020246">
                                Personal information
                            </p>
                            <p class="mb-0 fs-14px text-667085 mt-5">
                                Enter your personal information
                            </p>
                        </div>
                    </h4>
                    <h4 class="createStore__steps--step d-flex gap-13 text-decoration-none mb-0">
                        <div class="stepSvg">
                            <svg width="24" height="66" viewBox="0 0 24 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2381_16714)">
                                    <rect width="24" height="24" rx="12" fill="#F16645"></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.38967L9.93638 14.2997L8.03638 12.2697C7.68638 11.9397 7.13638 11.9197 6.73638 12.1997C6.34638 12.4897 6.23638 12.9997 6.47638 13.4097L8.72638 17.0697C8.94638 17.4097 9.32638 17.6197 9.75638 17.6197C10.1664 17.6197 10.5564 17.4097 10.7764 17.0697C11.1364 16.5997 18.0064 8.40967 18.0064 8.40967C18.9064 7.48967 17.8164 6.67967 17.0964 7.37967V7.38967Z" fill="white"></path>
                                </g>
                                <rect x="11" y="28" width="2" height="34" rx="1" fill="#F16645"></rect>
                                <defs>
                                    <clipPath id="clip0_2381_16714">
                                        <rect width="24" height="24" rx="12" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="createStore__steps--titles text-start">
                            <p class="mb-0 fs-14px fw-medium mt-7 text-c020246">
                                Verification
                            </p>
                            <p class="mb-0 fs-14px text-667085 mt-5">
                                Enter the verification code
                            </p>
                        </div>
                    </h4>
                    <h4 class="createStore__steps--step d-flex gap-13 text-decoration-none mb-0">
                        <div class="stepSvg">
                            <svg width="24" height="66" viewBox="0 0 24 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2381_16714)">
                                    <rect width="24" height="24" rx="12" fill="#F16645"></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.38967L9.93638 14.2997L8.03638 12.2697C7.68638 11.9397 7.13638 11.9197 6.73638 12.1997C6.34638 12.4897 6.23638 12.9997 6.47638 13.4097L8.72638 17.0697C8.94638 17.4097 9.32638 17.6197 9.75638 17.6197C10.1664 17.6197 10.5564 17.4097 10.7764 17.0697C11.1364 16.5997 18.0064 8.40967 18.0064 8.40967C18.9064 7.48967 17.8164 6.67967 17.0964 7.37967V7.38967Z" fill="white"></path>
                                </g>
                                <rect x="11" y="28" width="2" height="34" rx="1" fill="#F16645"></rect>
                                <defs>
                                    <clipPath id="clip0_2381_16714">
                                        <rect width="24" height="24" rx="12" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="createStore__steps--titles text-start">
                            <p class="mb-0 fs-14px fw-medium mt-7 text-c020246">
                                Business information
                            </p>
                            <p class="mb-0 fs-14px text-667085 mt-5">
                                Enter your Business information
                            </p>
                        </div>
                    </h4>
                    <h4 class="createStore__steps--step d-flex gap-13 text-decoration-none mb-0">
                        <div class="stepSvg">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2381_16875)">
                                    <rect width="24" height="24" rx="12" fill="#F16645" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.38967L9.93638 14.2997L8.03638 12.2697C7.68638 11.9397 7.13638 11.9197 6.73638 12.1997C6.34638 12.4897 6.23638 12.9997 6.47638 13.4097L8.72638 17.0697C8.94638 17.4097 9.32638 17.6197 9.75638 17.6197C10.1664 17.6197 10.5564 17.4097 10.7764 17.0697C11.1364 16.5997 18.0064 8.40967 18.0064 8.40967C18.9064 7.48967 17.8164 6.67967 17.0964 7.37967V7.38967Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2381_16875">
                                        <rect width="24" height="24" rx="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="createStore__steps--titles text-start">
                            <p class="mb-0 fs-14px fw-medium mt-7 text-c020246">
                                Choose the template
                            </p>
                            <p class="mb-0 fs-14px text-667085 mt-5">
                                Choose the template that meets your needs
                            </p>
                        </div>
                    </h4>
                </div>
                <div class="createStore__form1 g-col-12 g-col-xl-7 bg-white p-40 rounded-32px h-max-content" data-aos="fade-left" data-aos-delay="600">
                    <svg class="svgRect" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" rx="40" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M56.9881 24.6335L33.1214 47.6669L26.7881 40.9002C25.6214 39.8002 23.7881 39.7335 22.4548 40.6669C21.1548 41.6335 20.7881 43.3335 21.5881 44.7002L29.0881 56.9002C29.8214 58.0335 31.0881 58.7335 32.5214 58.7335C33.8881 58.7335 35.1881 58.0335 35.9214 56.9002C37.1214 55.3335 60.0214 28.0335 60.0214 28.0335C63.0214 24.9669 59.3881 22.2669 56.9881 24.6002V24.6335Z" fill="white"/>
                    </svg>
                    <h2 class="my-40 fs-24px fw-medium">
                        {{__('main.your_store_has_been_created_successfully')}}
                    </h2>
                    <div class="successfullyBtns d-flex flex-wrap gap-25 mx-auto">
                        <a href="#" type="button" class="flex-grow-1 outlineBtnHoverEffect transition-300ms bg-white fw-medium text-decoration-none fs-14px btn btn-outline-primary m-0 py-15 px-25"
                        >                    {{__('main.go_to_your_store')}}

                        </a>
                        <a href="#" type="button" class="flex-grow-1 primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn btn-primary m-0 py-15 px-25"
                        > {{__('main.go_to')}} {{__('main.dashboard')}}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('js')

    <script>
        // Inti AOS
        AOS.init({
            once: true,
        })

        const scrollableList = document.getElementById('templatesPills-tab')
        const scrollLeftButton = document.getElementById('scroll-left')
        const scrollRightButton = document.getElementById('scroll-right')

        scrollLeftButton.addEventListener('click', () => {
            scrollableList.scrollBy({
                left: -100,
                behavior: 'smooth',
            })
        })

        scrollRightButton.addEventListener('click', () => {
            scrollableList.scrollBy({
                left: 100,
                behavior: 'smooth',
            })
        })
    </script>
@endpush

