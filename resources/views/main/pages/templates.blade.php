@extends('main.layouts.master')

@section('navigation')
    @include('main.partials.light-nav')
@endsection

@push('style')
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <!-- pricing page css arabic -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/templates.rtl.min.css')}} />
    @else
        <!-- pricing page css english -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/templates.min.css')}} />
    @endif
@endpush

@section('content')
    <main class="mainContent pt-150 pt-md-170 mb-100 mb-md-120">
        <section class="templates position-relative bg-white p-40 container containerEdit rounded-32px">
            <button class="rounded-circle bg-secondary border-0" id="scroll-left">
                <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25999 8.52875L0.73999 4.99875L4.25999 1.46875" stroke="white" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="bg-secondary border-0 rounded-circle" id="scroll-right">
                <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.740009 8.52875L4.26001 4.99875L0.740009 1.46875" stroke="white" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="templates__content">
                <div class="intro">
                    <h1 class="templatesTitle mx-auto fs-32px fw-medium mb-40 text-center text-capitalize"
                        data-aos="fade-up">
                        {{__('main.choose_the_template_that_meets_your_needs')}}
                    </h1>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <ul class="nav nav-pills templatesPills gap-13 mb-50 d-flex flex-nowrap overflow-x-scroll pb-10 px-5"
                        id="templatesPills-tab" role="tablist">
                        @foreach($templateCategories as $index => $template_category)
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link templatesPills__btn fs-14px fw-medium rounded-16px border-primary border text-black border-1 rounded-8px p-15 {{ $index === 0 ? 'active' : '' }}"
                                    id="templatesPills-{{ $template_category->id }}-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#templatesPills-{{ $template_category->id }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="templatesPills-{{ $template_category->id }}"
                                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                    {{ $template_category->name }}
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content" id="templatesPills-tabContent">
                        <div class="tab-content" id="templatesPills-tabContent">
                            @foreach($templateCategories as $template_category)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                     id="templatesPills-{{ $template_category->id }}" role="tabpanel"
                                     aria-labelledby="templatesPills-{{ $template_category->id }}-tab" tabindex="0">
                                    <div class="templateGrid grid row-gap-32 position-relative"
                                         style="justify-items: center">
                                        @foreach($template_category->templates as $template)
                                            <div
                                                class="g-col-12 g-col-sm-6 g-col-md-4 g-col-xl-3 templateGrid__box bg-f8 rounded-16px pt-15 pb-25 px-15 transition-300ms d-flex flex-column align-items-center">
                                                <div class="templateGrid__imgBox mx-auto mb-30 position-relative">
                                                    <p class="fw-medium mb-16 text-primary">{{ $template->name }}</p>
                                                    <img class="templateGrid__box--img img-fluid w-100 rounded-16px"
                                                         src="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? Storage::url($template->rtl_image) : Storage::url($template->ltr_image) }}"
                                                         alt="template-img" width="163" height="148"/>
                                                </div>
                                                <div class="d-flex flex-wrap gap-15">
                                                    <a href="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? $template->rtl_link : $template->ltr_link }}"
                                                       class="fs-14px fw-medium d-flex justify-content-center align-items-center btn btn-outline-primary templateGrid__box-preview">Preview</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>


            </div>
        </section>
    </main>
@endsection

@push('js')

    <script>
        // Inti AOS
        AOS.init({
            once: true,
        })

        const scrollableList = document.getElementById('templatesPills-tab')
        const scrollLeftButton = document.getElementById('scroll-left')
        const scrollRightButton = document.getElementById('scroll-right')

        scrollLeftButton.addEventListener('click', () => {
            scrollableList.scrollBy({
                left: -100,
                behavior: 'smooth',
            })
        })

        scrollRightButton.addEventListener('click', () => {
            scrollableList.scrollBy({
                left: 100,
                behavior: 'smooth',
            })
        })
    </script>
@endpush

