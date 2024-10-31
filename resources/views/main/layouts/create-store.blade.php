<!DOCTYPE html>
<html lang="en" @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku') dir="rtl" @else dir="ltr" @endif>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Reach store" />
    <meta name="keywords" content="Reach store, store" />
    <meta name="robots" content="index, follow" />
    <!-- Title & Favicon -->
    <title>Konin store | كونين ستور</title>
    <link rel="shortcut icon" type="image/x-icon"  href= {{\Illuminate\Support\Facades\Storage::url($setting->favicon)}}>

    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <!-- Font in arabic -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet"/>

        <!-- Show this in arabic pages for font family -->
        <style>
            *:not(i) {
                font-family: "Tajawal", sans-serif !important;
                font-weight: 400;
            }
        </style>
    @else
        <!-- Font in english -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    @endif
    <link rel="stylesheet" href="{{asset('./main/assets/css/aos.min.css')}}"/>

    @stack('style')

</head>

<body class="bg-fbfbfc">
<!-- Main Content -->
@yield('content')


{{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>--}}
<!-- Bootstrap JS -->
<script src="{{asset('./main/assets/js/bootstrap.bundle.min.js')}}"></script>
@stack('script')
</body>

</html>
