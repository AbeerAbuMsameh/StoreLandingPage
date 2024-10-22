<footer class="mainFooter">
    <div class="container containerEdit d-flex flex-column align-items-center">
        <a class="navbar-brand p-0 m-0 flex-shrink-0" href="{{route('main.home')}}">
            <img class="img-fluid mainFooter__img mt-60 mb-40"
                 src="{{\Illuminate\Support\Facades\Storage::url($setting->footer_logo) ?? null}}" data-aos="fade-up"
                 alt="footer-logo" width="136" height="55"/>
        </a>
        <p class="mainFooter__subTitles text-center fw-light text-white mb-80" data-aos="fade-up">
            {{--            {{$setting->footer_description ?? null}}--}}
            {{--            {{ $setting->footer_descriptionon[\Illuminate\Support\Facades\App::getLocale()] ?? $setting->footer_description['en'] ?? '' }}--}}

            @php
                $locale = app()->getLocale();
                $translations = json_decode($setting->footer_description, true);
            @endphp

            {{ $translations[$locale] ?? $translations['en'] }}
        </p>

        <div class="d-flex justify-content-center align-items-center gap-20 gap-sm-40 gap-md-50 gap-md-80">
            <a class="mainFooter__navLinks text-white transition-300ms text-decoration-none text-capitalize"
               href="{{route('main.faq')}}"> {{__('main.faqs')}} </a>
            <a class="mainFooter__navLinks text-white transition-300ms text-decoration-none text-capitalize"
               href="{{route('main.help')}}"> {{__('main.help')}} </a>
            <a class="mainFooter__navLinks text-white transition-300ms text-decoration-none text-capitalize"
               href="{{route('main.contacts')}}"> {{__('main.contact_us')}} </a>
        </div>
    </div>
    <div class="container containerEdit pt-25 pb-60 mt-80 px-0 mainFooter__rights border-color-d9 border-bottom-0 border-start-0 border-end-0 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
        <p class="text-white fs-14px fw-light mb-20 mb-md-0 text-center text-md-start">
            {{__('main.all_rights_reserved')}} © {{ date('Y') }}
        </p>
        <div class="d-flex gap-10 gap-md-25">
            @if(isset($setting) && $setting->facebook != null)
                <a class="text-decoration-none mainFooter__rights--boxLinkSocials transition-300ms rounded-circle d-flex justify-content-center align-items-center"
                   href="{{$setting->facebook ?? null}}">
                    <img src="{{asset('./main/assets/imgs/facbook-footer.png')}}" alt="facbook-footer"/>
                </a>
            @endif
            @if(isset($setting) && $setting->instagram != null)
                <a class="text-decoration-none mainFooter__rights--boxLinkSocials transition-300ms rounded-circle d-flex justify-content-center align-items-center"
                   href="{{$setting->instagram ?? null}}">
                    <img src="{{asset('./main/assets/imgs/instafooter.png')}}" alt="insta-footer"/>
                </a>
            @endif
            @if(isset($setting) && $setting->twitter != null)
                <a class="text-decoration-none mainFooter__rights--boxLinkSocials transition-300ms rounded-circle d-flex justify-content-center align-items-center"
                   href="{{$setting->twitter ?? null}}">
                    <img src="{{asset('./main/assets/imgs/twitterfooter.png')}}" alt="twitter-footer"/>
                </a>
            @endif

        </div>
    </div>
</footer>
