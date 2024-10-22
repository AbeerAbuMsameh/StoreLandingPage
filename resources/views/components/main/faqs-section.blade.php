@props(['title', 'description', 'faqs_odd', 'faqs_even'])

<section class="faq container containerEdit mt-70 mt-md-130">
    <p class="fw-medium fs-60px mb-0 text-center" data-aos="fade-up">{{$title}}</p>
    <p class="fs-24px mb-80 text-center mx-auto" data-aos="fade-up">
        {{$description}}
    </p>
    <div data-aos="fade-up" class="accordion grid column-gap-sm-30px row-gap-sm-30px" id="accordionForFAQ">
        <div class="accordion__container g-col-12 g-col-xl-6">
            @foreach($faqs_odd as $faq)
                <x-main.faq-box-section question="{{ __($faq->question) }}" answer="{{ __($faq->answer) }}"
                                        id="accordionForFAQCollapse{{$faq->id}}" ></x-main.faq-box-section>
            @endforeach

        </div>
        <div class="accordion__container g-col-12 g-col-xl-6">
            @foreach($faqs_even as $fa)
                <x-main.faq-box-section question="{{ __($fa->question) }}" answer="{{ __($fa->answer) }}"
                                        id="accordionForFAQCollapse{{$fa->id}}" ></x-main.faq-box-section>
            @endforeach
        </div>
    </div>
</section>
