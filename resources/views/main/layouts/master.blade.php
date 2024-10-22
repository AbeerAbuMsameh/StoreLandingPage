<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku') dir="rtl"
      @else dir="ltr" @endif>
<head>
    <!-- Required meta tags -->
    @include('main.partials.meta')
    <!-- Title -->
    <title>Konin store | كونين ستور</title>
    <!-- CSS -->
    @include('main.partials.css')
    @stack('style')
</head>
<body>
<!-- Navigation -->
@include('main.partials.nav')

<!-- Main Content -->
<main class="mainContent">
    @yield('content')
</main>

<!-- footer -->
@include('main.partials.footer')

<!-- JS -->
@include('main.partials.js')
@stack('js')
</body>
</html>
