@props(['icon', 'title', 'description'])

<div class="g-col-12 g-col-sm-6 g-col-xl-4" data-aos="fade-right">
    <div class="features__box rounded-16px card-shadow-hover rounded-24px transition-300ms h-100 d-flex flex-column align-items-center align-items-xl-start justify-content-center">
        <img class="img-fluid" src="{{ $icon }}" alt="{{ $title }}" width="366" height="197"/>
        <div class="p-25">
            <p class="fw-medium fs-18px mb-10 text-center text-xl-start">
                {{ $title }}
            </p>
            <p class="fs-14px mb-0 text-center text-xl-start">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
