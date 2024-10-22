@props(['title', 'description', 'faqs_odd', 'faqs_even'])

<section class="faq bg-f9 pt-70 pb-150">
    <div class="container containerEdit">
        <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">
            {{$title}}
        </h2>
        <h3 class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto" data-aos="fade-up" data-aos-delay="200">
            {{$description}}
        </h3>

        <div data-aos="fade-up" class="accordion grid column-gap-sm-30px row-gap-sm-30px" id="accordionForFAQ">
            <div class="accordion__container g-col-12 g-col-xl-6">
            @foreach($faqs_odd as $faq)
                <x-main.faq-box-section question="{{ __($faq->question) }}" answer="{{ __($faq->answer) }}" id="accordionForFAQCollapse{{$faq->id}}" ></x-main.faq-box-section>
            @endforeach

        </div>
        <div class="accordion__container g-col-12 g-col-xl-6">
            @foreach($faqs_even as $faq)
                <x-main.faq-box-section question="{{ __($faq->question) }}" answer="{{ __($faq->answer) }}" id="accordionForFAQCollapse{{$faq->id}}" ></x-main.faq-box-section>
            @endforeach
        </div>
    </div>
</section>
