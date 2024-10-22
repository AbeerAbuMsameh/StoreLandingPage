@extends('main.layouts.master')


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
                    <li class="nav-item navPricePills__list flex-grow-1" role="presentation">
                        <button class="fw-semibold text-primary border-0 navPricePills__list--btn nav-link h-100 w-100 d-flex flex-column flex-sm-row align-items-center justify-content-center gap-5 active"
                            id="pricePills-monthly-tab" data-bs-toggle="pill"
                            data-bs-target="#pricePills-monthly" type="button"
                            role="tab" aria-controls="pricePills-monthly" aria-selected="true">
                            Monthly
                        </button>
                    </li>
                    <li
                        class="nav-item navPricePills__list flex-grow-1"
                        role="presentation"
                    >
                        <button
                            class="fw-semibold text-primary border-0 navPricePills__list--btn nav-link h-100 w-100 d-flex flex-column flex-sm-row align-items-center justify-content-center gap-5"
                            id="pricePills-yearly-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pricePills-yearly"
                            type="button"
                            role="tab"
                            aria-controls="pricePills-yearly"
                            aria-selected="false"
                        >
                            Yearly
                        </button>
                    </li>
                    <li
                        class="nav-item navPricePills__list flex-grow-1"
                        role="presentation"
                    >
                        <button
                            class="fw-semibold text-primary border-0 navPricePills__list--btn nav-link h-100 w-100 d-flex flex-column flex-sm-row align-items-center justify-content-center gap-5"
                            id="pricePills-custom-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pricePills-custom"
                            type="button"
                            role="tab"
                            aria-controls="pricePills-custom"
                            aria-selected="false"
                        >
                            Custom
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pricePills-tabContent">
                    <div class="tab-pane fade show active" id="pricePills-monthly" role="tabpanel" aria-labelledby="pricePills-monthly-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Free</th>
                                    <th scope="col">Basic</th>
                                    <th scope="col">Bronze</th>
                                    <th scope="col">Gold</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Price</th>
                                    <td>$0</td>
                                    <td>$14.08/mo</td>
                                    <td>$29.08/mo</td>
                                    <td>$82.50/mo</td>
                                </tr>
                                <tr>
                                    <th scope="row">Products Number</th>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <th scope="row">number of categories</th>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>50</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Easy online store to launch your business for free
                                    </th>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Easy online store to launch your business for free
                                    </th>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>$0</td>
                                    <td>$14.08/mo</td>
                                    <td>$29.08/mo</td>
                                    <td>$82.50/mo</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxFree__btn w-max-content primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn btn-primary m-0 py-8 px-9"
                                        >Get Started
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxStandard__btn w-max-content outlineBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn m-0 py-8 px-9"
                                        >coming soon
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxPremium__btn w-max-content primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn m-0 py-8 px-9"
                                        >coming soon
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxUltimate__btn w-max-content primaryBtnHoverEffect transition-300ms fw-medium text-decoration-none fs-14px btn m-0 py-8 px-9"
                                        >coming soon
                                        </a>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="pricePills-yearly"
                        role="tabpanel"
                        aria-labelledby="pricePills-yearly-tab"
                        tabindex="0"
                    >
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Free</th>
                                    <th scope="col">Basic</th>
                                    <th scope="col">Bronze</th>
                                    <th scope="col">Gold</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Price</th>
                                    <td>$0</td>
                                    <td>$14.08/mo</td>
                                    <td>$29.08/mo</td>
                                    <td>$82.50/mo</td>
                                </tr>
                                <tr>
                                    <th scope="row">Products Number</th>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <th scope="row">number of categories</th>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>50</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Easy online store to launch your business for free
                                    </th>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Easy online store to launch your business for free
                                    </th>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>$0</td>
                                    <td>$14.08/mo</td>
                                    <td>$29.08/mo</td>
                                    <td>$82.50/mo</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxFree__btn w-max-content primaryBtnHoverEffect transition-300ms mt-40 fw-medium text-decoration-none fs-14px btn btn-primary m-0 py-15 px-25"
                                        >Get Started
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxStandard__btn w-max-content outlineBtnHoverEffect transition-300ms mt-40 fw-medium text-decoration-none fs-14px btn m-0 py-15 px-25"
                                        >coming soon
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxPremium__btn w-max-content primaryBtnHoverEffect transition-300ms mt-40 fw-medium text-decoration-none fs-14px btn m-0 py-15 px-25"
                                        >coming soon
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxUltimate__btn w-max-content primaryBtnHoverEffect transition-300ms mt-40 fw-medium text-decoration-none fs-14px btn m-0 py-15 px-25"
                                        >coming soon
                                        </a>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="pricePills-custom"
                        role="tabpanel"
                        aria-labelledby="pricePills-custom-tab"
                        tabindex="0"
                    >
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Free</th>
                                    <th scope="col">Basic</th>
                                    <th scope="col">Bronze</th>
                                    <th scope="col">Gold</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Price</th>
                                    <td>$0</td>
                                    <td>$14.08/mo</td>
                                    <td>$29.08/mo</td>
                                    <td>$82.50/mo</td>
                                </tr>
                                <tr>
                                    <th scope="row">Products Number</th>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <th scope="row">number of categories</th>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>50</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Easy online store to launch your business for free
                                    </th>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Easy online store to launch your business for free
                                    </th>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/false-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="false-icon"
                                        />
                                    </td>
                                    <td>
                                        <img
                                            src={{asset('./main/assets/imgs/true-icon.svg')}}
                                            width="24"
                                            height="24"
                                            alt="true-icon"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>$0</td>
                                    <td>$14.08/mo</td>
                                    <td>$29.08/mo</td>
                                    <td>$82.50/mo</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxFree__btn w-max-content primaryBtnHoverEffect transition-300ms mt-40 fw-medium text-decoration-none fs-14px btn btn-primary m-0 py-15 px-25"
                                        >Get Started
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxStandard__btn w-max-content outlineBtnHoverEffect transition-300ms mt-40 fw-medium text-decoration-none fs-14px btn m-0 py-15 px-25"
                                        >coming soon
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxPremium__btn w-max-content primaryBtnHoverEffect transition-300ms mt-40 fw-medium text-decoration-none fs-14px btn m-0 py-15 px-25"
                                        >coming soon
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="./create-store-1.html"
                                            type="button"
                                            class="pricePillsBoxUltimate__btn w-max-content primaryBtnHoverEffect transition-300ms mt-40 fw-medium text-decoration-none fs-14px btn m-0 py-15 px-25"
                                        >coming soon
                                        </a>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

