@extends('main.layouts.master')

@section('navigation')
    @include('main.partials.light-nav')
@endsection

@push('style')
    <!-- help page css arabic -->
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <link rel="stylesheet" href="{{ asset('./main/assets/css/help.rtl.min.css') }}"/>
    @else
        <link rel="stylesheet" href="{{ asset('./main/assets/css/help.min.css') }}"/>
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endpush
@section('content')
    @if(session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif
    <main class="mainContent pt-150 pt-md-170 mb-100 mb-md-120">
        <section>
            <h1 class="templatesTitle mx-auto fs-32px fw-medium mb-15 text-center text-capitalize" data-aos="fade-up">
                {{ __('main.get_in_touch') }}
            </h1>
            <p class="mb-50 mt-24 introSubTitles mx-auto text-center" data-aos="fade-up" data-aos-delay="100">
                {{ __('main.we_love_to_hear_from_you_Please_fill_out_this_form') }}
            </p>
        </section>
        <section class="help grid gap-25 gap-sm-40 bg-white px-25 px-sm-44 px-lg-80 py-50 container containerEdit rounded-10px" data-aos="fade-up" data-aos-delay="200">
            <div class="help__info p-15 p-sm-25 p-md-40 w-100 h-100 bg-primary position-relative rounded-10px g-col-12 g-col-lg-6">
                <p class="text-white fs-28px fw-semibold mb-0">{{ __('main.contact_information') }}</p>
                <p class="help__info--sub fs-18px mb-110"> {{ __('main.say_something_to_start_live_chat') }}</p>

                <div class="d-flex gap-25 flex-nowrap align-items-center mb-25 mb-sm-50">
                    <svg class="flex-shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 10.999H22C22 5.869 18.127 2 12.99 2V4C17.052 4 20 6.943 20 10.999Z" fill="white"/>
                        <path d="M13.0003 8.00024C15.1033 8.00024 16.0003 8.89724 16.0003 11.0002H18.0003C18.0003 7.77524 16.2253 6.00024 13.0003 6.00024V8.00024Z" fill="white"/>
                        <path d="M16.4223 13.4432C16.2301 13.2686 15.9776 13.1754 15.7181 13.1835C15.4585 13.1915 15.2123 13.3001 15.0313 13.4862L12.6383 15.9472C12.0623 15.8372 10.9043 15.4762 9.71228 14.2872C8.52028 13.0942 8.15928 11.9332 8.05228 11.3612L10.5113 8.96724C10.6977 8.78637 10.8064 8.54006 10.8144 8.28045C10.8225 8.02083 10.7292 7.76828 10.5543 7.57624L6.85928 3.51324C6.68432 3.3206 6.44116 3.20374 6.18143 3.1875C5.92171 3.17125 5.66588 3.2569 5.46828 3.42624L3.29828 5.28724C3.12539 5.46075 3.0222 5.69169 3.00828 5.93624C2.99328 6.18624 2.70728 12.1082 7.29928 16.7022C11.3053 20.7072 16.3233 21.0002 17.7053 21.0002C17.9073 21.0002 18.0313 20.9942 18.0643 20.9922C18.3088 20.9786 18.5396 20.8749 18.7123 20.7012L20.5723 18.5302C20.7417 18.3328 20.8276 18.077 20.8115 17.8173C20.7954 17.5576 20.6788 17.3143 20.4863 17.1392L16.4223 13.4432Z" fill="white"/>
                    </svg>
                    <p class="text-white m-0">{{$setting->mobile}}</p>
                </div>

                <div class="d-flex gap-25 flex-nowrap align-items-center mb-25 mb-sm-50">
                    <svg class="flex-shrink-0" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 0H0V16H20V0ZM18 4L10 9L2 4V2L10 7L18 2V4Z" fill="white"/>
                    </svg>
                    <p class="text-white m-0">{{$setting->email}}</p>
                </div>

                <div class="d-flex gap-25 flex-nowrap align-items-center mb-25 mb-sm-50">
                    <svg class="flex-shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 1.5C9.81276 1.50258 7.71584 2.3726 6.16923 3.91922C4.62261 5.46584 3.75259 7.56276 3.75001 9.75C3.74739 11.5374 4.33124 13.2763 5.41201 14.7C5.41201 14.7 5.63701 14.9963 5.67376 15.039L12 22.5L18.3293 15.0353C18.3623 14.9955 18.588 14.7 18.588 14.7L18.5888 14.6978C19.669 13.2747 20.2526 11.5366 20.25 9.75C20.2474 7.56276 19.3774 5.46584 17.8308 3.91922C16.2842 2.3726 14.1873 1.50258 12 1.5ZM12 12.75C11.4067 12.75 10.8266 12.5741 10.3333 12.2444C9.83995 11.9148 9.45543 11.4462 9.22837 10.8981C9.00131 10.3499 8.9419 9.74667 9.05765 9.16473C9.17341 8.58279 9.45913 8.04824 9.87869 7.62868C10.2982 7.20912 10.8328 6.9234 11.4147 6.80764C11.9967 6.69189 12.5999 6.7513 13.1481 6.97836C13.6962 7.20542 14.1648 7.58994 14.4944 8.08329C14.8241 8.57664 15 9.15666 15 9.75C14.999 10.5453 14.6826 11.3078 14.1202 11.8702C13.5578 12.4326 12.7954 12.749 12 12.75Z" fill="white"/>
                    </svg>
                    <p class="text-white m-0">132 Dartmouth Street, Boston, Massachusetts 02156, United States</p>
                </div>

                <svg class="position-absolute bottom-0 end-0" width="208" height="228" viewBox="0 0 208 228" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="162.5" cy="160.5" r="134.5" fill="white" fill-opacity="0.12"/>
                    <circle cx="69" cy="69" r="69" fill="#FFF9F9" fill-opacity="0.13"/>
                </svg>
            </div>

            <div class="help__form g-col-12 g-col-lg-6">
                <form method="POST" action="{{ route('main.contacts') }}" class="helpForm mx-auto needs-validation" novalidate>
                    @csrf
                    <div class="mb-25">
                        <label for="helpForm-fullName" class="form-label fs-14px fw-medium">{{ __('main.full_name') }}</label>
                        <input required type="text"
                               @class(['form-control rounded-8px input-shadow py-11','is-invalid' => $errors->has('name')])
                               id="helpForm-fullName"
                               name="name"
                               value="{{ old('name') }}"
                               placeholder="{{ __('main.full_name') }}"/>
                        <x-main.error name="name"/>
                    </div>

                    <div class="mb-25">
                        <label for="helpForm-email" class="form-label fs-14px fw-medium">{{ __('main.email') }}</label>
                        <input required type="email"
                               @class(['form-control rounded-8px input-shadow py-11','is-invalid' => $errors->has('email')])
                               id="helpForm-email"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="email@company.com"/>
                        <x-main.error name="email"/>
                    </div>

                    <div class="mb-25">
                        <label for="helpForm-phone" class="form-label fs-14px fw-medium">{{ __('main.phone_number') }}</label>
                        <input required type="text"
                               @class(['form-control rounded-8px input-shadow py-11','is-invalid' => $errors->has('phone')])
                               id="helpForm-phone"
                               name="phone"
                               value="{{ old('phone') }}"
                               placeholder="{{ __('main.phone_number') }}"/>
                        <x-main.error name="phone"/>
                    </div>
                    <input type="hidden" id="country" name="country">
                    <input type="hidden" id="country_code" name="country_code">
                    <div class="mb-25">
                        <label for="helpForm-subject" class="form-label fs-14px fw-medium">{{ __('main.subject') }}</label>
                        <input required type="text"
                               @class(['form-control rounded-8px input-shadow py-11','is-invalid' => $errors->has('subject')])
                               id="helpForm-subject"
                               name="subject"
                               value="{{ old('subject') }}"
                               placeholder="{{ __('main.subject') }}"/>
                        <x-main.error name="subject"/>
                    </div>

                    <div class="mb-25">
                        <label for="helpForm-message" class="form-label fs-14px fw-medium">{{ __('main.message') }}</label>
                        <textarea name="message"
                                  @class(['form-control input-shadow helpForm-message resize-none','is-invalid' => $errors->has('message')])
                                  id="helpForm-message"
                                  required>{{ old('message') }}</textarea>
                        <x-main.error name="message"/>
                    </div>

                    <div class="mb-30 form-check d-flex align-items-center gap-10">
                        <input @class(['form-check-input helpForm__check cursor-pointer flex-shrink-0','is-invalid' => $errors->has('terms')])
                               name="terms"
                               type="checkbox"
                               id="createStoreFormOne-terms"
                               value="1"
                        {{ old('terms') ? 'checked' : '' }}
                        required/>
                        <label class="form-check-label fs-16px fw-medium mt-4 cursor-pointer flex-shrink-0" for="createStoreFormOne-terms">
                            {{ __('main.i_agree_to_our_friendly')}}
                            <a href="{{route('main.page.show', 'Privacy-Policy')}}" class="fw-normal text-body flex-shrink-0"> {{ __('main.privacy_policy') }}</a>.
                        </label>
                        <x-main.error name="terms"/>
                    </div>

                    <button type="submit"
                            class="primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none w-100 fs-14px btn btn-primary m-0 py-15 px-25">
                        {{__('main.send_message')}}
                    </button>
                </form>
            </div>
        </section>
    </main>

@endsection

@push('js')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>

        AOS.init();

        const input = document.querySelector("#helpForm-phone");
        const country_input = document.querySelector("#country");
        const country_code_input = document.querySelector("#country_code");

        const iti = window.intlTelInput(input, {
            separateDialCode: true,
        });

        iti.setCountry("{{ $country_code }}");

        input.addEventListener("blur", function() {
            const selectedCountryData = iti.getSelectedCountryData();
            console.log(selectedCountryData);
            country_input.value = selectedCountryData.name;
            country_code_input.value = selectedCountryData.dialCode;

        });
    </script>
@endpush
