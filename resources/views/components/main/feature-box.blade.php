<!-- resources/views/components/feature-box.blade.php -->
@props(['icon', 'title', 'description'])

<div class="g-col-12 g-col-sm-6 g-col-xl-4" data-aos="fade-right" >
    <div class="features__box card-shadow-hover borderHoverEffect rounded-24px transition-300ms h-100 px-32 py-25 bg-f9 d-flex flex-column align-items-center align-items-xl-start justify-content-center">
        <div class="features__boxSvg bg-primary bg-opacity-10 rounded-8px mb-15 d-flex justify-content-center align-items-center">
            <img src="{{ $icon }}" alt="{{ $title }}" width="20" height="20">
        </div>
        <p class="fw-medium fs-20px mb-20 text-center text-xl-start">
            {{ $title }}
        </p>
        <p class="mb-0 text-center text-xl-start">
            {{ $description }}
        </p>
    </div>
</div>
