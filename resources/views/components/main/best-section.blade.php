@props(['title', 'description', 'icons'])

<section class="best container containerEdit mt-70 mt-md-130">
    <p class="fw-medium fs-60px mb-15 text-center" data-aos="fade-up">
        {{$title}}
    </p>
    <p class="mb-50 text-center positives__subTitle mx-auto" data-aos="fade-up">
        {{$description}}
    </p>
    <div class="grid column-gap-sm-45px row-gap-sm-36px" data-aos="fade-up">
        @foreach($icons as $icon)
        <div class="g-col-12 g-col-md-6 g-col-xxl-4">
            <div
                class="features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms h-100 px-32 py-25 bg-f9 d-flex flex-column justify-content-center align-items-center align-items-xxl-start justify-content-center py-md-50 px-md-40">
                <div
                    class="features__boxSvg positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center">
                    <img class="svgPath" src="{{$icon->image }}" alt="icon" width="28" height="28"/>

                </div>
                <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">
                    {{$icon->title}}
                </p>
                <p class="mb-0 fs-14px text-center text-xxl-start">
                    {{$icon->description}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>
