@props(['title', 'subtitle', 'link','image', 'image_alt','button_name'])

<header class="header min-vh-100">
    <div class="headerDiv container containerEdit">
        <h1 class="fs-48px pt-170 fw-medium text-white text-capitalize text-center">
            {{ $title }}
        </h1>
        <p class="lh-40 text-white opacity-80 mt-30 mb-0 text-center">
            {{ $subtitle }}
        </p>
        <div class="d-flex justify-content-center">
            <a href="{{ $link }}" type="button"
               class="primaryBtnHoverEffect transition-300ms text-decoration-none btn btn-primary text-capitalize m-0 py-15 px-25 mt-32 mb-50 rounded-8px">
                {{ $button_name }}
            </a>
        </div>

        <img
            class="img-fluid mb-80"
            src="{{ $image }}"
            alt="{{ $image_alt }}"
            data-aos="fade-up"
            data-aos-delay="600"
        />

    </div>
</header>
