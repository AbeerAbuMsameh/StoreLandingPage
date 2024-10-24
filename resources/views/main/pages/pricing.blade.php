@extends('main.layouts.master')

@section('navigation')
    @include('main.partials.light-nav')
@endsection

@push('style')
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <!-- pricing page css arabic -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/pricing.rtl.min.css')}} />
    @else
        <!-- pricing page css english -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/pricing.min.css')}} />
    @endif
@endpush

@section('content')
    <main class="mainContent pt-150 pt-md-170 mb-100 mb-md-120">
        <section class="pricing bg-white p-40 container containerEdit rounded-32px">
            <div class="intro">
                <h1 class="fw-medium fs-32px mb-25 text-center text-capitalize" data-aos="fade-up">
                    {{__('main.find_the_plan_that_right_for_you')}}
                </h1>
                <p class="fs-14px text-center mb-40 intro__subTitle mx-auto" data-aos="fade-up">
                    {{__('main.enjoy_the_comprehensive_plan_your_choice_with_variety_features_tailored_to_suit_your_needs')}}
                </p>
            </div>
            <div class="container containerEdit" data-aos="fade-up" data-aos-delay="200">
                <ul class="nav nav-pills bg-primary bg-opacity-15 align-items-stretch navPricePills border border-primary border-1 p-5 justify-content-center mx-auto mb-50" id="pricePills-tab" role="tablist">
                    @foreach ($packageCategories as $index => $category)
                        <li class="nav-item navPricePills__list flex-grow-1" role="presentation">
                            <button class="fw-semibold text-primary border-0 navPricePills__list--btn nav-link h-100 w-100 d-flex flex-column flex-sm-row align-items-center justify-content-center gap-5 {{ $index === 0 ? 'active' : '' }}"
                                    id="pricePills-{{ $category->category->id }}-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pricePills-{{ $category->category->id }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="pricePills-{{ $category->category->id }}"
                                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                {{ $category->category->name }}
                            </button>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="pricePills-tabContent">
                    @foreach ($packageCategories as $index => $category)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="pricePills-{{ $category->category->id }}" role="tabpanel" aria-labelledby="pricePills-{{ $category->category->id }}-tab" tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">{{ $category->name }}</th> <!-- Assuming package names are stored as JSON -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($features as $feature)
                                    <tr>
                                        <th scope="row">{{ $feature->title }}</th>
                                            <td>
                                                @if ($category->features->contains('feature_key', $feature->feature_key))  <!-- Assuming feature_key is used to match features -->
                                                Yes
                                                @else
                                                    No
                                                @endif
                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th scope="row"></th>
                                            <td>
{{--                                                <a--}}
{{--                                                    href="./create-store-1.html"--}}
{{--                                                    type="button"--}}
{{--                                                    class="pricePillsBox{{ $package->name }}__btn w-max-content primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn {{ $package->is_available ? 'btn-primary' : 'btn-outline-primary' }} m-0 py-8 px-9"--}}
{{--                                                >--}}
{{--                                                    {{ 'Get Started'  'Coming Soon' }}--}}
{{--                                                </a>--}}
                                            </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

