@props(['title', 'description', 'features'])

<section class="reports container containerEdit">
    <h2 class="fw-medium fs-40px mb-15 text-center" data-aos="fade-up">
        {{ $title }}
    </h2>
    <h3 class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center reports__subTitle mx-auto" data-aos="fade-up" data-aos-delay="200">
        {{ $description }}
    </h3>
    <div class="grid align-items-center row-gap-sm-36px column-gap-sm-35px">
        @foreach ($features as $feature)
            <x-main.feature-box
                :icon="isset($feature['image']) ? Storage::url($feature['image']) : null"
                :title="__($feature['title'] ?? 'Default Title')"
                :description="__($feature['description'] ?? 'Default Description')"
            />
        @endforeach
    </div>
</section>

