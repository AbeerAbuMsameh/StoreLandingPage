@if($currentPage == 1)
    <main class="mainContent p-0">
        <section class="createStore createStoreOne container containerEdit pt-40 pt-md-80 text-center">
            <img class="createStore__img img-fluid mb-40" src="{{asset('./main-assets/imgs/create-store-logo.png')}}"
                 alt="create-store-logo"/>
            <h1 class="fs-32px fw-medium mb-50 lh-sm">
                {{__('main.create_your_own_store_for_free_at_minutes')}}
            </h1>
            <div class="createStore__navs mb-40">
                <div class="d-flex gap-25 justify-content-center">
                    <div class="mb-0" data-aos="fade" data-aos-delay="200">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms active"
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="250">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms "
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="300">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms "
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="350">
                        <div class="createStore__navs--item bg-c4 transition-300ms"></div>
                    </div>
                </div>
            </div>
            <form class="createStoreForm createStoreFormOne mx-auto mb-40" wire:submit.prevent="firstStep"
                  method="post">
                <div class="mb-20">
                    <input wire:model.defer="name" type="text" class="form-control " id="createStoreFormOne-name"
                           placeholder="{{__('main.full_name')}}"/>
                    @error('name')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-20">
                    <div class="position-relative">
                        <p class="phoneStart mb-0 fw-semibold fs-14px position-absolute top-50 translate-middle-y ps-13 pe-13">
                            {{$phoneCode}}
                        </p>
                        <input wire:model.defer="mobileNumber" type="text"
                               class="phoneStartInput form-control direction-initial" id="createStoreFormOne-phone"
                               placeholder="{{__('main.mobile-number')}}"/>
                    </div>
                    @error('mobileNumber')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-20">
                    <input wire:model.defer="email" type="text" class="form-control" id="createStoreFormOne-email"
                           placeholder="{{__('main.email')}}"/>
                    @error('email')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-20">
                    <div class="position-relative password-wrapper">
                        <input wire:model.defer="password" type="password" class="form-control password-input"
                               id="createStoreFormOne-password" placeholder="{{__('main.password')}}"/>
                        <span class="password-toggle">
                        <svg class="eye-icon" width="35" height="35" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <svg class="eye-slash-icon hide-password" width="35" height="35"
                             xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                        </svg>
                    </span>
                    </div>
                    @error('password')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-20">
                    <div class="position-relative password-wrapper">
                        <input wire:model.defer="passwordConfirmation" type="password"
                               class="form-control password-input" id="createStoreFormOne-repeatPassword"
                               placeholder="{{__('main.repeat_password')}}"/>
                        <span class="password-toggle">
                        <svg class="eye-icon" width="35" height="35" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <svg class="eye-slash-icon hide-password" width="35" height="35"
                             xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                        </svg>
                    </span>
                    </div>
                    @error('passwordConfirmation')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-check d-flex align-items-center gap-10">
                    <input wire:model.defer="acceptTerms" class="form-check-input createStoreForm__check cursor-pointer"
                           type="checkbox" id="createStoreFormOne-terms"/>
                    <label class="form-check-label text-start fs-13px mt-4 fw-semibold text-secondary cursor-pointer"
                           for="createStoreFormOne-terms">
                        {{__('main.i_accept_the')}}
                        <a href="{{route('main.page.show', 'Privacy-Policy')}}"><span
                                class="text-primary fw-semibold ms-5">{{__('main.privacy-policy')}} </span></a>
                        {{__('main.and')}}
                        <a href="{{route('main.page.show', 'termandconditions')}}"><span
                                class="text-primary fw-semibold ms-5">{{__('main.terms-and-conditions')}}</span></a>
                    </label>
                </div>
                @error('acceptTerms')
                <div class="mt-10 d-flex flex gap-10" role="alert">
                    <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                    </svg>
                    <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                </div>
                @enderror
                <button type="submit" class="btn btn-primary fw-semibold rounded-8px mt-20 w-100 ">
                    {{__('main.sign_up')}}
                </button>
                @if($errors->any())
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{__('main.please_make_sure_that_you_have_filled_in_all_required_fields')}}</p>
                    </div>
                @endif
                <p class="fs-14px text-a1 fw-medium mb-0 mt-20">
                    {{__('main.already_have_an_account')}}
                    <a href="{{route('main.create-store')}}" class="text-decoration-none ms-8">
                        <span class="text-primary fs-14px fw-medium">{{__('main.log_in')}}</span>
                    </a>
                </p>
            </form>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const togglePasswords = document.querySelectorAll(".password-toggle");
                const passwordInputs = document.querySelectorAll(".password-input");
                const eyeIcons = document.querySelectorAll(".eye-icon");
                const eyeSlashIcons = document.querySelectorAll(".eye-slash-icon");

                togglePasswords.forEach(function (element, index) {
                    element.addEventListener("click", function () {
                        const type = passwordInputs[index].getAttribute("type") === "password" ? "text" : "password";
                        passwordInputs[index].setAttribute("type", type);

                        eyeIcons[index].classList.toggle("hide-password");
                        eyeSlashIcons[index].classList.toggle("hide-password");
                    });
                });
            });
        </script>
    </main>

@elseif($currentPage == 2)
    <main class="mainContent p-0">
        <section class="createStore createStoreTwo container containerEdit pt-40 pt-md-80 text-center">
            <img class="createStore__img img-fluid mb-40" src="{{asset('./main-assets/imgs/create-store-logo.png')}}"
                 alt="create-store-logo"/>
            <h1 class="fs-32px fw-medium mb-50 lh-sm">
                {{__('main.create_your_own_store_for_free_at_minutes')}}
            </h1>
            <div class="createStore__navs mb-40">
                <div class="d-flex gap-25 justify-content-center">
                    <div class="mb-0" data-aos="fade" data-aos-delay="200">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms active"
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="250">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms active"
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="300">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms "
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="350">
                        <div class="createStore__navs--item bg-c4 transition-300ms"></div>
                    </div>
                </div>
            </div>
            <p class="text-a1 fs-18px fw-medium mb-0">
                {{__('main.enter_the_verification_code_we_sent_to')}}
            </p>
            <p class="text-18 fs-18px fw-semibold">{{preg_replace('/^\d{9}/', '*********', $email)}}</p>
            <form class="createStoreForm createStoreFormTwo createStoreFormOne mx-auto mb-40"
                  wire:submit.prevent="secondStep" method="post">
                <p class="fw-semibold fs-14px mb-4 ms-n80">
                    {{__('main.type_your_4_digit_security_code')}}
                </p>
                <div class="mb-30">
                    <div class="verificationCode d-flex justify-content-center gap-20 direction-initial">
                        <input wire:model.defer="verificationCodeInput.0" type="tel" maxlength="1" pattern="[0-9]"
                               class="form-control verificationCode__input text-7e fs-26px fw-semibold text-center"
                               autofocus/>
                        <input wire:model.defer="verificationCodeInput.1" type="tel" maxlength="1" pattern="[0-9]"
                               class="form-control verificationCode__input text-7e fs-26px fw-semibold text-center"/>
                        <input wire:model.defer="verificationCodeInput.2" type="tel" maxlength="1" pattern="[0-9]"
                               class="form-control verificationCode__input text-7e fs-26px fw-semibold text-center"
                               data-aos-delay="300"/>
                        <input wire:model.defer="verificationCodeInput.3" type="tel" maxlength="1" pattern="[0-9]"
                               class="form-control verificationCode__input text-7e fs-26px fw-semibold text-center"
                               data-aos-delay="350"/>
                    </div>
                    @if(isset($verificationMessage))
                        <div class="mt-10 ms-40 d-flex flex gap-10" role="alert">
                            <svg class="svgStorke flex-shrink-0" width="25" height="25"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#fff">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                            </svg>
                            <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$verificationMessage}}</p>
                        </div>
                    @endif
                </div>
                {{-- @error('verificationCodeInput')--}}
                {{-- <span>{{$message}}</span>--}}
                {{-- @enderror--}}

                <button type="submit" class="btn btn-primary rounded-8px createStoreFormTwo__submit py-11 fw-semibold">
                    {{__('main.verify')}}
                </button>
            </form>
        </section>
    </main>

@elseif($currentPage == 3)
    <main class="mainContent p-0">
        <section class="createStore createStoreTwo container containerEdit pt-40 pt-md-80 text-center">
            <img class="createStore__img img-fluid mb-40" src="{{asset('./main-assets/imgs/create-store-logo.png')}}"
                 alt="create-store-logo"/>
            <h1 class="fs-32px fw-medium mb-50 lh-sm">
                {{__('main.create_your_own_store_for_free_at_minutes')}}
            </h1>
            <div class="createStore__navs mb-40">
                <div class="d-flex gap-25 justify-content-center">
                    <div class="mb-0" data-aos="fade" data-aos-delay="200">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms active"
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="250">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms active"
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="300">
                        <div
                            class="createStore__navs--item bg-c4 transition-300ms active"
                        ></div>
                    </div>
                    <div class="mb-0" data-aos="fade" data-aos-delay="350">
                        <div class="createStore__navs--item bg-c4 transition-300ms"></div>
                    </div>
                </div>
            </div>
            <form class="createStoreForm createStoreFormThree mx-auto mb-40" wire:submit.prevent="thirdStep"
                  method="post">
                <div class="mb-20">
                    <input wire:model.debounce.500ms="storeName" type="text" class="form-control fw-semibold"
                           id="createStoreFormThree-name" placeholder="{{__('main.store_name')}}"/>
                    @error('storeName')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                    @if(!$storeNameValid)
                        <div class="mt-10 d-flex flex gap-10" role="alert">
                            <svg class="svgStorke flex-shrink-0" width="25" height="25"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#fff">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                            </svg>
                            <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{__('main.the_subName_is_already_used')}}</p>
                        </div>
                    @endif
                </div>
                <div class="mb-20">
                    <div class="grid domain gap-0">
                        <div class="g-col-6">
                            <input wire:model.debounce.500ms="storeDomain" type="text" class="form-control fw-semibold"
                                   id="createStoreFormThree-subDomain" placeholder="{{__('main.sub_domain')}}"/>
                        </div>
                        <div class="g-col-6">
                            <label for="createStoreFormThree-subDomain"
                                   class="text-7e bg-f7 fw-medium form-label createStoreFormThree-subDomainLabel">.{{env('APP_DOMAIN')}}</label>
                        </div>
                    </div>
                    @error('storeDomain')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                    @if(!$storeDomainValid)
                        <div class="mt-10 d-flex flex gap-10" role="alert">
                            <svg class="svgStorke flex-shrink-0" width="25" height="25"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#fff">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                            </svg>
                            <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{__('main.the_subDomain_is_already_used')}}</p>
                        </div>
                    @endif
                </div>
                <div class="mb-20">
                    <select wire:model.debounce="countryId" class="text-capitalize form-select"
                            aria-label="Select country">
                        <option class="fs-12px fw-semibold text-capitalize text-7e">
                            {{__('main.select_country')}}
                        </option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}" class="fs-12px fw-semibold text-capitalize text-7e">
                                {{$country->name}}
                            </option>
                        @endforeach
                    </select>
                    @error('countryId')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-20">
                    <select wire:model.defer="cityId" class="text-capitalize form-select" aria-label="Select city">
                        @if($cities->count() == 0)
                            <option class="fs-12px fw-semibold text-capitalize text-7e">
                                {{__('main.select_city')}}
                            </option>
                        @endif
                        @foreach($cities as $city)
                            <option value="{{$city->id}}" class="fs-12px fw-semibold text-capitalize text-7e">
                                {{$city->name}}
                            </option>
                        @endforeach
                    </select>
                    @error('cityId')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-20">
                    <select wire:model.defer="languageId" class="text-capitalize form-select"
                            aria-label="Select language">
                        <option class="fs-12px fw-semibold text-capitalize text-7e">
                            {{__('main.select_language')}}
                        </option>
                        @foreach($languages as $language)
                            <option value="{{$language->id}}" class="fs-12px fw-semibold text-capitalize text-7e">
                                {{$language->lang}}
                            </option>
                        @endforeach
                    </select>
                    @error('languageId')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-20">
                    <select wire:model.defer="currentlySell" class="form-select"
                            aria-label="Select what do you currently sell?">
                        <option class="fs-12px fw-semibold text-capitalize text-7e">
                            {{__('main.how_do_you_currently_sell')}}
                        </option>
                        <option class="fs-12px fw-semibold text-capitalize text-7e" value="online">
                            {{__('main.online_store')}}
                        </option>
                        <option class="fs-12px fw-semibold text-capitalize text-7e" value="physical">
                            {{__('main.physical_store')}}
                        </option>
                        <option class="fs-12px fw-semibold text-capitalize text-7e" value="both">
                            {{__('main.both')}}
                        </option>
                    </select>
                    @error('currentlySell')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-20">
                    <select wire:model.defer="manyProductHave" class="form-select"
                            aria-label="Select how many products do you have?">
                        <option class="fs-12px fw-semibold text-capitalize text-7e">
                            {{__('main.how_many_products_can_merchants_list_on_the_platform')}}
                        </option>
                        <option class="fs-12px fw-semibold text-capitalize text-7e" value="50-500">
                            50-500
                        </option>
                        <option class="fs-12px fw-semibold text-capitalize text-7e" value="501-1000">
                            501-1000
                        </option>
                        <option class="fs-12px fw-semibold text-capitalize text-7e" value="1001-3000">
                            1001-3000
                        </option>
                        <option class="fs-12px fw-semibold text-capitalize text-7e" value="3001-more">
                            {{__('more_than')}} 3000 {{__('items')}}
                        </option>
                    </select>
                    @error('manyProductHave')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-20">
                    <select class="form-select" aria-label="Select category" wire:model.defer="templateCategoryId">
                        <option class="fs-12px fw-semibold text-capitalize text-7e">
                            {{__('main.select_category')}}
                        </option>
                        @foreach($categories as $category)
                            <option class="fs-12px fw-semibold text-capitalize text-7e" value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                    @error('templateCategoryId')
                    <div class="mt-10 d-flex flex gap-10" role="alert">
                        <svg class="svgStorke flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <p class="fs-14px text-primary fw-normal mb-0 text-start pt-4">{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary rounded-8px w-100 fw-semibold">
                    {{__('main.next')}}
                </button>
            </form>
        </section>
    </main>

@elseif($currentPage == 4)
    <main class="mainContent p-0 mb-50 position-relative">
        <div wire:loading.remove>
            <section class="createStore createStoreFour container containerEdit pt-40 pt-md-80 text-center">
                <img class="createStore__img img-fluid mb-40"
                     src="{{asset('./main-assets/imgs/create-store-logo.png')}}" alt="create-store-logo"/>
                <p class="fs-32px fw-medium mb-50 lh-sm">
                    {{__('main.create_your_own_store_for_free_at_minutes')}}
                </p>
                <div class="createStore__navs mb-40">
                    <div class="d-flex gap-25 justify-content-center">
                        <div class="mb-0" data-aos="fade" data-aos-delay="200">
                            <div
                                class="createStore__navs--item bg-c4 transition-300ms active"
                            ></div>
                        </div>
                        <div class="mb-0" data-aos="fade" data-aos-delay="250">
                            <div
                                class="createStore__navs--item bg-c4 transition-300ms active"
                            ></div>
                        </div>
                        <div class="mb-0" data-aos="fade" data-aos-delay="300">
                            <div
                                class="createStore__navs--item bg-c4 transition-300ms active"
                            ></div>
                        </div>
                        <div class="mb-0" data-aos="fade" data-aos-delay="350">
                            <div class="createStore__navs--item bg-c4 transition-300ms"></div>
                        </div>
                    </div>
                </div>
                <form class="createStoreForm createStoreFormFour mx-auto" wire:submit.prevent="fourthStep"
                      method="post">
                    <h1 class="fs-24px text-1e mb-60">
                        {{__('main.choose_the_template_that_meets_your_needs')}}
                    </h1>
                    <div class="grid templateGrid row-gap-sm-24px column-gap-sm-20px justify-content-center">
                        @foreach($templates as $template)
                            <div class="templateGrid__box bg-f8 rounded-16px pt-9 pb-25 transition-300ms">
                                <div class="templateGrid__imgBox mx-auto mb-30 position-relative">
                                    <div class="templateGrid__overlay d-none">
                                        <div
                                            class="position-absolute w-100 h-100 start-0 top-0 bg-black opacity-50 rounded-16px"></div>
                                        <p class="position-absolute fw-medium fs-32px w-100 mt-n30 mb-0 top-50 start-50 translate-middle text-white">
                                            {{__('main.coming_soon')}}
                                        </p>
                                    </div>
                                    <img class="templateGrid__box--img img-fluid w-100 rounded-16px"
                                         src="{{ asset('main-assets/imgs/'.$template->imageKey) }}" alt="template-img"/>
                                </div>
                                <input wire:model.defer="templateId"  checked type="radio" class="btn-check" name="template_id" value="{{$template->id}}" required
                                       id="template{{$template->id}}" autocomplete="off"/>
                                <label class="btn btn-primary rounded-8px fs-16px fw-medium w-100"
                                       for="template{{$template->id}}"> {{ $template->name }} </label>
                            </div>
                        @endforeach
                        {{--                            <div class="templateGrid__box bg-f8 rounded-16px pt-9 pb-25 transition-300ms">--}}
                        {{--                                <div class="templateGrid__imgBox mx-auto mb-30 position-relative">--}}
                        {{--                                    <div class="templateGrid__overlay d-none">--}}
                        {{--                                        <div--}}
                        {{--                                            class="position-absolute w-100 h-100 start-0 top-0 bg-black opacity-50 rounded-16px"></div>--}}
                        {{--                                        <p class="position-absolute fw-medium fs-32px w-100 mt-n30 mb-0 top-50 start-50 translate-middle text-white">--}}
                        {{--                                            {{__('main.coming_soon')}}--}}
                        {{--                                        </p>--}}
                        {{--                                    </div>--}}
                        {{--                                    <img class="templateGrid__box--img img-fluid w-100 rounded-16px"--}}
                        {{--                                         src="{{asset('./main-assets/imgs/template-2.webp')}}" alt="template-img"/>--}}
                        {{--                                </div>--}}
                        {{--                                <input type="radio" class="btn-check" name="templateSelection" required--}}
                        {{--                                       id="template2" autocomplete="off"/>--}}
                        {{--                                <label class="btn btn-primary rounded-8px fs-16px fw-medium w-100"--}}
                        {{--                                       for="template2">{{__('main.select')}}</label>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="templateGrid__box bg-f8 rounded-16px pt-9 pb-25 transition-300ms">--}}
                        {{--                                <div class="templateGrid__imgBox mx-auto mb-30 position-relative">--}}
                        {{--                                    <div class="templateGrid__overlay d-none">--}}
                        {{--                                        <div--}}
                        {{--                                            class="position-absolute w-100 h-100 start-0 top-0 bg-black opacity-50 rounded-16px"></div>--}}
                        {{--                                        <p class="position-absolute fw-medium fs-32px w-100 mt-n30 mb-0 top-50 start-50 translate-middle text-white">--}}
                        {{--                                            {{__('main.coming_soon')}}--}}
                        {{--                                        </p>--}}
                        {{--                                    </div>--}}
                        {{--                                    <img class="templateGrid__box--img img-fluid w-100 rounded-16px"--}}
                        {{--                                         src="{{asset('./main-assets/imgs/template-3.webp')}}" alt="template-img"/>--}}
                        {{--                                </div>--}}
                        {{--                                <input type="radio" class="btn-check" name="templateSelection" required--}}
                        {{--                                       id="template3" autocomplete="off"/>--}}
                        {{--                                <label class="btn btn-primary rounded-8px fs-16px fw-medium w-100"--}}
                        {{--                                       for="template3">{{__('main.select')}}</label>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="templateGrid__box bg-f8 rounded-16px pt-9 pb-25 transition-300ms">--}}
                        {{--                                <div class="templateGrid__imgBox mx-auto mb-30 position-relative">--}}
                        {{--                                    <div class="templateGrid__overlay d-none">--}}
                        {{--                                        <div--}}
                        {{--                                            class="position-absolute w-100 h-100 start-0 top-0 bg-black opacity-50 rounded-16px"></div>--}}
                        {{--                                        <p class="position-absolute fw-medium fs-32px w-100 mt-n30 mb-0 top-50 start-50 translate-middle text-white">--}}
                        {{--                                            {{__('main.coming_soon')}}--}}
                        {{--                                        </p>--}}
                        {{--                                    </div>--}}
                        {{--                                    <img class="templateGrid__box--img img-fluid w-100 rounded-16px"--}}
                        {{--                                         src="{{asset('./main-assets/imgs/template-4.webp')}}" alt="template-img"/>--}}
                        {{--                                </div>--}}
                        {{--                                <input type="radio" class="btn-check" name="templateSelection" required--}}
                        {{--                                       id="template4" autocomplete="off"/>--}}
                        {{--                                <label class="btn btn-primary rounded-8px fs-16px fw-medium w-100"--}}
                        {{--                                       for="template4">{{__('main.select')}}</label>--}}
                        {{--                            </div>--}}
                    </div>
                    <button type="submit"
                            class="btn btn-primary rounded-8px fw-semibold createStoreFormFour__submit w-100 mt-50 mb-0">
                        {{__('main.create')}}
                    </button>
                </form>
            </section>
        </div>
        <div wire:loading>
            <section
                class="container containerEdit d-flex flex-column justify-content-center align-items-center min-vh-100 position-absolute top-0 start-0 min-vw-100 ">
                <img class="img-fluid mb-60" src="{{asset('./main-assets/imgs/store-created.png')}}"
                     alt="store-created.png" data-aos="fade"/>
                <h1 class="fs-24px fw-medium mb-0 lh-sm text-black text-center" data-aos="fade" data-aos-delay="200">
                    {{__('main.your_store_is_being_created')}}
                </h1>
            </section>
        </div>
    </main>

@elseif($currentPage == 5)
    <main class="mainContent p-0">
        <section
            class="container containerEdit d-flex flex-column justify-content-center align-items-center min-vh-100">
            <img class="img-fluid mb-60" src="{{asset('./main-assets/imgs/store-created.png')}}" alt="store-created.png"
                 data-aos="fade"/>
            <h1 class="fs-24px fw-medium mb-0 lh-sm text-black text-center" data-aos="fade" data-aos-delay="200">
                {{__('main.your_store_has_been_created_successfully')}}
            </h1>
            <div class="mt-50 d-flex flex-column flex-sm-row gap-20 storeCreatedSuccessfully_btns" data-aos="fade-up">
                <a href="{{$storeLink}}" type="button"
                   class="d-flex justify-content-center fw-medium align-items-center btn btn-outline-primary">
                    {{__('main.go_to_your_store')}}
                </a>
                <a href="{{$dashboardLink}}" type="button"
                   class="d-flex justify-content-center fw-medium align-items-center btn btn-primary">{{__('main.go_to')}} {{__('main.dashboard')}}</a>
            </div>
        </section>
    </main>

@elseif($currentPage == 6)
    <main
        class="container containerEdit processFailed d-flex flex-column justify-content-center align-items-center min-vh-100">
        <img src="{{asset('./main-assets/imgs/error.png')}}" alt="error"/>
        <p class="text-uppercase text-primary fs-22px fw-bold my-15">{{__('main.error')}}!</p>
        <p class="text-c4a fs-18px fw-medium my-0 text-center">{{__('main.thank_you_for_your_request')}}</p>
        <p class="text-c4a fs-18px fw-medium my-0 text-center">
            {{__('main.we_are_unable_to_continue_the_process')}}
        </p>
        <p class="text-c4a fs-18px fw-medium mt-20 text-center">
            {{__('main.please_try_again_to_complete_the_request')}}
        </p>
        <a href="{{route('main.create-store')}}" type="button"
           class="processFailed__btn mx-auto mt-40 primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-16px fw-semibold btn btn-primary m-0 py-15 px-25">{{__('main.try_again')}}
        </a>
    </main>
@endif
