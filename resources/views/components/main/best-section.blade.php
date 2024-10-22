@props(['title', 'description', 'image', 'image_alt', 'icons'])

<section class="best bg-f9 py-70">
    <div class="container containerEdit">
        <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">       {{ $title }}</h2>
        <h3 class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto" data-aos="fade-up"
            data-aos-delay="200">
            {{ $description }}
        </h3>
        <div class="grid">
            @php
                $half = ceil($icons->count() / 2);
            @endphp
            <div class="grid g-col-12 g-col-xxl-4 gap-10" data-aos="fade-up">
                @foreach($icons->slice(0, $half) as $icon)
                <div class="g-col-12 g-col-md-4 g-col-xxl-12 features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms p-20">
                    <div class="features__boxSvg mx-auto mx-xxl-0 positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($icon->image) }}" width="24" height="24" alt="false-icon"/>
                    </div>
                    <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">{{ $icon->title }}</p>
                    <p class="mb-0 fs-14px text-center text-xxl-start">{{ $icon->description }}</p>
                </div>
                @endforeach
            </div>
            <div class="g-col-12 g-col-xxl-4 d-flex justify-content-center align-items-center" data-aos="fade-up">
                <img class="img-fluid" src="{{$image}}" alt="{{$image_alt}}"/>
            </div>
            <div class="grid g-col-12 g-col-xxl-4 gap-10" data-aos="fade-up">
                @foreach($icons->slice($half) as $icon)
                <div class="g-col-12 g-col-md-4 g-col-xxl-12 features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms p-20">
                    <div class="features__boxSvg mx-auto mx-xxl-0 positives__boxSvg bg-primary bg-opacity-10 rounded-16px mb-15 d-flex justify-content-center align-items-center">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($icon->image) }}" width="24" height="24" alt="false-icon"/>
                    </div>
                    <p class="fw-medium fs-20px mb-10 text-center text-xxl-start">{{ $icon->title }}</p>
                    <p class="mb-0 fs-14px text-center text-xxl-start">{{ $icon->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
