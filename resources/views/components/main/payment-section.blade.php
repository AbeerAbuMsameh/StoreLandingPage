@props(['title', 'description', 'link', 'button_name', 'image', 'image_alt'])

<section class="payment container containerEdit mt-70 mt-md-150">
    <div class="grid">
        <div class="g-col-12 g-col-lg-5 d-flex justify-content-center" data-aos="fade-right">
            <img class="img-fluid w-100 imgWidthInMobile" src="{{$image}}"
                 alt="{{$image_alt}}"/>
        </div>
        <div data-aos="fade-left" data-aos-delay="200"
             class="g-col-12 g-col-lg-7 d-flex flex-column justify-content-center">
            <p class="fw-medium fs-53px mb-25 lh-75 text-center text-lg-start">
                {{$title}}
            </p>
            <p class="fs-18px mb-30 text-center text-lg-start">
                {{$description}}
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="{{ $link }}" type="button"
                   class="primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn btn-primary m-0 py-15 px-25 w-max-content">{{$button_name}}
                </a>
            </div>
        </div>
    </div>
</section>
