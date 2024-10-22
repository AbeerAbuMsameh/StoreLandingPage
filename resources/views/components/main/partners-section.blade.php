@props(['title', 'success_partner'])

<section class="partners container containerEdit mt-70 mt-md-130">
    <p class="fw-medium fs-60px mb-50 text-center" data-aos="fade-up">
        {{$title}}
    </p>
    <div class="swiper partnersSwiper" data-aos="fade-up">
        <div class="swiper-wrapper justify-content-xl-center align-items-center">
            @foreach($success_partner as $success_partner)
                <div class="swiper-slide w-max-content">
                    <img class="img-fluid w-100 partnersSwiper__img"
                         src="{{$success_partner->image}}" alt="partners-img"/>
                </div>
            @endforeach
        </div>
    </div>
</section>
