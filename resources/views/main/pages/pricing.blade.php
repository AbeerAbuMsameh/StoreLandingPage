@extends('main.layouts.master')

@section('navigation')
    @include('main.partials.light-nav')
@endsection

@section('bodyClass')
    class="bg-fbfbfc"
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

                <ul class="nav nav-pills bg-primary bg-opacity-15 align-items-stretch navPricePills border border-primary border-1 p-5 justify-content-center mx-auto mb-50"
                    id="pricePills-tab" role="tablist">
                    @foreach($packageCategories as $categoryName => $packages)
                        <li class="nav-item navPricePills__list flex-grow-1" role="presentation">
                            <button
                                class="fw-semibold text-primary border-0 navPricePills__list--btn nav-link h-100 w-100 d-flex flex-column flex-sm-row align-items-center justify-content-center gap-5 {{ $loop->first ? 'active' : '' }}"
                                id="pricePills-{{ strtolower($categoryName) }}-tab" data-bs-toggle="pill"
                                data-bs-target="#pricePills-{{ strtolower($categoryName) }}" type="button" role="tab"
                                aria-controls="pricePills-{{ strtolower($categoryName) }}"
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                {{ $categoryName }}
                            </button>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="pricePills-tabContent">
                    @foreach($packageCategories as $categoryName => $packages)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="pricePills-{{ strtolower($categoryName) }}" role="tabpanel" aria-labelledby="pricePills-{{ strtolower($categoryName) }}">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        @foreach($packages as $package)
                                            <th scope="col">{{ $package->name }}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- First Row: Price of Package -->
                                    <tr>
                                        <th scope="row">Price For month</th>
                                        @foreach($packages as $package)
                                            <td>{{ $package->paid_monthly_price ?? '00.00' }} $</td>
                                        @endforeach
                                    </tr>
                                    <!-- Feature Rows -->
                                    @foreach($features as $feature)
                                        <tr>
                                            <th scope="row">{{ $feature->title }}</th>
                                            @foreach($packages as $package)
                                                @php
                                                    $packageFeature = $package->features->where('title', $feature->title)->first();
                                                    $value = $packageFeature ? $packageFeature->pivot->value : null;
                                                @endphp
                                                <td>
                                                    @if($packageFeature)
                                                        {{ $value ?? 'Unlimited' }}
                                                    @else
                                                        <img src="{{ asset('./main/assets/imgs/false-icon.svg') }}" width="24" height="24" alt="false-icon">
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th scope="row"></th>
                                        @foreach($packages as $package)
                                            <td>
                                                <a href="./create-store-1.html" type="button" class="btn btn-primary m-0 py-8 px-9">Get Started</a>
                                            </td>
                                        @endforeach
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

