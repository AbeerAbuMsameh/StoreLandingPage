<link
    rel="shortcut icon"
    type="image/x-icon"
    href= {{\Illuminate\Support\Facades\Storage::url($setting->favicon)}}
/>

@if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
    <!-- Font in arabic -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap"
          rel="stylesheet"/>
    <style>
        *:not(i) {
            font-family: "Tajawal", sans-serif !important;
            font-weight: 400;
        }
    </style>
@else
    <!-- Font in english -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet"/>
@endif



<!-- Navbar css -->
<link rel="stylesheet" href= {{asset('./main/assets/css/navbar.min.css')}} />
<!-- Footer css -->
<link rel="stylesheet" href= {{asset('./main/assets/css/footer.min.css')}} />
<!-- AOS css -->
<link rel="stylesheet" href= {{asset('./main/assets/css/aos.min.css')}} />
<!-- Swiper css -->
<link rel="stylesheet" href= {{asset('./main/assets/css/swiper.min.css')}} />


