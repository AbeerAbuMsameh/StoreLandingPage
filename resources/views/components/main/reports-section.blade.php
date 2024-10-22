@props(['title', 'description', 'icons' ,'image' ,'image_alt'])

<section class="reports container containerEdit mt-70 mt-md-150">
    <div class="grid">
        <div class="g-col-12 g-col-xl-7" data-aos="fade-right">
            <p class="fw-medium fs-53px mb-25 lh-sm text-center text-xl-start">
                {{$title}}
            </p>
            <p class="fs-18px mb-50 text-center text-xl-start">
                {{$description}}
            </p>
            <div class="grid">
                @foreach($icons as $icon)
                    <div class="g-col-12 g-col-lg-6">
                        <div class="reports__box">
                            <div
                                class="d-flex flex-wrap align-items-center mb-15 gap-15 justify-content-center justify-content-xl-start">
                                <img class="svgPath" src="{{$icon->image }}" alt="icon" width="26" height="26"/>

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
        <div data-aos="fade-left" data-aos-delay="200"
             class="g-col-12 g-col-xl-5 order-first order-xl-last d-flex justify-content-center justify-content-xl-start">
            <img class="img-fluid w-100 imgWidthInMobile" src="{{ $image }}" alt="{{ $image_alt }}"/>
        </div>
    </div>
</section>
