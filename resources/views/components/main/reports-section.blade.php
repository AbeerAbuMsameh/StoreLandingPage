@props(['title', 'description', 'icons' ,'image' ,'image_alt'])

<section class="reports container containerEdit">
    <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">
        {{$title}}
    </h2>
    <h3 class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto" data-aos="fade-up" data-aos-delay="200">
        {{$description}}
    </h3>
    <div class="grid align-items-center">
        <div class="g-col-12 g-col-xl-7" data-aos="fade-right">
            <div class="grid">
                @foreach($icons as $icon)
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start">
                                <svg class="svgPath" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13 25.7999C20.0693 25.7999 25.8 20.0692 25.8 13C25.8 5.93071 20.0693 0.199951 13 0.199951C5.93077 0.199951 0.200012 5.93071 0.200012 13C0.200012 20.0692 5.93077 25.7999 13 25.7999ZM18.9314 10.9313C19.5562 10.3065 19.5562 9.29342 18.9314 8.66858C18.3065 8.04374 17.2935 8.04374 16.6686 8.66858L11.4 13.9372L9.33138 11.8686C8.70654 11.2437 7.69348 11.2437 7.06864 11.8686C6.4438 12.4934 6.4438 13.5065 7.06864 14.1313L10.2686 17.3313C10.8935 17.9562 11.9065 17.9562 12.5314 17.3313L18.9314 10.9313Z" />
                                </svg>
                                <p class="fs-20px fw-bold mb-0">{{$icon->title}}</p>
                            </div>
                            <p class="mb-0 ms-sm-40 text-center text-xl-start">
                                {{$icon->description}}
                            </p>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <div class="g-col-12 g-col-xl-5">
            <img src="{{ $image }}" class="reports__img img-fluid" alt="{{ $image_alt }}" data-aos="fade-left">
        </div>
    </div>
</section>
