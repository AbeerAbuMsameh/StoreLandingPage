@props(['title', 'description', 'templateCategories'])

<section class="positives container containerEdit mt-70 mt-md-130">
    <p class="fw-medium fs-60px mb-15 text-center" data-aos="fade-up">
        {{ $title }}
    </p>
    <p class="mb-50 text-center positives__subTitle mx-auto" data-aos="fade-up">
        {{ $description }}
    </p>
    <div class="grid column-gap-sm-45px row-gap-sm-36px" data-aos="fade-up">
        @foreach ($templateCategories as $category)
        <div class="g-col-12 g-col-sm-6 g-col-xl-4">
            <div
                class="features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms h-100 px-32 py-25 bg-f9 d-flex flex-column justify-content-center align-items-center py-md-50 px-md-40">
                <div class="features__boxSvg positives__boxSvg bg-primary bg-opacity-10 rounded-circle mb-15 d-flex justify-content-center align-items-center">
                    <img class="svgPath" src="{{ Storage::url($category->image) }}" alt="icon" width="40" height="40"/>
                </div>
                <p class="fw-medium fs-20px mb-0 text-center">
                    {{$category->name}}
                </p>
            </div>
        </div>
        @endforeach

    </div>
</section>
