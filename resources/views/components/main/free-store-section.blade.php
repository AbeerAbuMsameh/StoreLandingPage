@props(['title','link', 'description','button_name'])

<section class="get-store-now bg-f9 py-70">
    <div class="container container-edit">
        <header class="text-center" data-aos="fade-up">
            <h2 class="fw-medium fs-40px mb-15"> {{$title}}</h2>
            <p class="fs-18px fw-normal lh-lg opacity-80 mb-50 reports__subTitle mx-auto" data-aos="fade-up" data-aos-delay="200">
                {{$description}}
            </p>
        </header>

        <div class="d-flex justify-content-center" data-aos="fade-up">
            <a href="{{ $link }}" class="btn btn-primary primary-btn-hover-effect transition-300ms text-capitalize py-15 px-25 rounded-8px text-decoration-none">
                {{$button_name}}
            </a>
        </div>
    </div>
</section>
