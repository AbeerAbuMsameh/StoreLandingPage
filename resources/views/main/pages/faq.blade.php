@extends('main.layouts.master')

@section('navigation')
    @include('main.partials.light-nav')
@endsection

@push('style')
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <!-- faq page css arabic -->
        <link rel="stylesheet" href="{{asset('./main/assets/css/faq.rtl.min.css')}}"/>
    @else
        <link rel="stylesheet" href="{{asset('./main/assets/css/faq.min.css')}}"/>
    @endif
@endpush

@section('content')
    <main class="mainContent pt-150 pt-md-170 mb-100 mb-md-120">
        <div class="faq intro container containerEdit">
            <h1 class="faqTitle mx-auto fs-32px fw-bold mb-15 text-center text-capitalize" data-aos="fade-up">
                {{ __($section9->title) }}
            </h1>
            <p class="faqTitleSubtitle fs-24px mb-80 introSubTitles mx-auto text-center" data-aos="fade-up" data-aos-delay="100">
                {{ __($section9->description)}}
            </p>
            <div data-aos="fade-up" class="accordion grid column-gap-sm-30px row-gap-sm-30px" id="accordionForFAQ">
                <div class="accordion__container g-col-12 g-col-xl-6">
                    @foreach($faqs_odd as $faq)
                        <x-main.faq-box-section
                            question="{{ __($faq->question) }}"
                            answer="{{ __($faq->answer) }}"
                            id="accordionForFAQCollapse{{$faq->id}}"
                            buttonClass="fs-22px"
                        />
                    @endforeach

                </div>
                <div class="accordion__container g-col-12 g-col-xl-6">
                    @foreach($faqs_even as $faq)
                        <x-main.faq-box-section
                            question="{{ __($faq->question) }}"
                            answer="{{ __($faq->answer) }}"
                            id="accordionForFAQCollapse{{$faq->id}}"
                            buttonClass="fs-22px"
                        />
                    @endforeach
                </div>
            </div>
        </div>
    </main>


@endsection
