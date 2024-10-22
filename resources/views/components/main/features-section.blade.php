<!-- resources/views/components/features-section.blade.php -->
@props(['title', 'description','image','image_alt'])

<section class="positives container containerEdit mt-70">
    <h2 class="fw-medium fs-40px mt-50 mt-md-100 mt-lg-170 mb-15 text-center" data-aos="fade-up">
        {{ $title }}
    </h2>
    <h3 class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center positives__subTitle mx-auto" data-aos="fade-up" data-aos-delay="200">
        {{ $description }}

    </h3>
    <div class="positivesImg d-none d-lg-block" data-aos="fade-up" data-aos-delay="400">
        <img class="img-fluid w-100" src="{{ $image }}" alt="{{ $image_alt }}" width="1100" height="780"/>
    </div>

    <div class="grid column-gap-sm-35px row-gap-sm-36px">
        <div class="g-col-12 g-col-sm-6 g-col-xl-4" data-aos="fade-right">
            <div class="features__box rounded-16px card-shadow-hover rounded-24px transition-300ms h-100 d-flex flex-column align-items-center align-items-xl-start justify-content-center">
                <img class="img-fluid" src="{{asset('./main/assets/imgs/features-box-1.webp')}}" alt="features-box-1" width="366" height="197"/>
                <div class="p-25">
                    <p class="fw-medium fs-18px mb-10 text-center text-xl-start">
                        Connect with customers
                    </p>
                    <p class="fs-14px mb-0 text-center text-xl-start">
                        Communicate with your customers directly through the platform.
                    </p>
                </div>
            </div>
        </div>
        <div class="g-col-12 g-col-sm-6 g-col-xl-4" data-aos="fade-right" data-aos-delay="200">
            <div class="features__box rounded-16px card-shadow-hover rounded-24px transition-300ms h-100 d-flex flex-column align-items-center align-items-xl-start justify-content-center">
                <img class="img-fluid" src="{{asset('./main/assets/imgs/features-box-2.webp')}}" alt="features-box-1" width="366" height="197"/>
                <div class="p-25">
                    <p class="fw-medium fs-18px mb-10 text-center text-xl-start">
                        Excellent payment method
                    </p>
                    <p class="fs-14px mb-0 text-center text-xl-start">
                        Through konin pay , you can easily control your financial
                        resources.
                    </p>
                </div>
            </div>
        </div>
        <div class="g-col-12 g-col-sm-6 g-col-xl-4" data-aos="fade-right" data-aos-delay="300">
            <div class="features__box rounded-16px card-shadow-hover rounded-24px transition-300ms h-100 d-flex flex-column align-items-center align-items-xl-start justify-content-center">
                <img class="img-fluid" src="{{asset('./main/assets/imgs/features-box-3.webp')}}" alt="features-box-1" width="366" height="197"/>
                <div class="p-25">
                    <p class="fw-medium fs-18px mb-10 text-center text-xl-start">
                        Control everything
                    </p>
                    <p class="fs-14px mb-0 text-center text-xl-start">
                        We gave you a tight dashboard that controls everything
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
