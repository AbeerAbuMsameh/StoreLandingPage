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
        <link rel="stylesheet" href= {{asset('./main/assets/css/terms.rtl.min.css')}} />
    @else
        <!-- pricing page css english -->
        <link rel="stylesheet" href= {{asset('./main/assets/css/terms.min.css')}} />
    @endif
@endpush

@section('content')
    <main class="mainContent pt-150 pt-md-170 mb-100 mb-md-120">
        <section class="terms container containerEdit">
            <h1 class="fs-35px mb-25 fw-medium" data-aos="fade-down" data-aos-delay="100">
                {{$page->title}}
            </h1>
            <div data-aos="fade-up" data-aos-delay="200">
                <p class="text-justify">
                    {!! $page->description !!}
                </p>
            </div>
        </section>
    </main>
@endsection

