@props(['title', 'description', 'template'])

<section class="positives container containerEdit mt-70">
    <h2 class="fw-medium fs-40px mt-50 mt-md-100 mt-lg-170 mb-15 text-center" data-aos="fade-up">
        {{ $title }}
    </h2>
    <h3 class="fs-18px fw-normal lh-lg opacity-80 mb-50 text-center positives__subTitle mx-auto" data-aos="fade-up" data-aos-delay="200">
        {{ $description }}
    </h3>

    <div class="positives__navTabs">
        <div class="d-flex flex-column flex-lg-row gap-30">
            <div class="positives__navTabs--btns flex-shrink-0 nav flex-row flex-lg-column flex-nowrap pb-15 pb-lg-0 pe-lg-32 nav-pills me-3 gap-30"
                 id="positives-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach($template as $key => $category)
                    <button class="nav-link flex-shrink-0 fs-15px fw-medium p-16 rounded-16px border border-1 {{ $key == 0 ? 'active' : 'btn btn-outline-primary' }}"
                            id="positives-pills-{{ $category->id }}-tab" data-bs-toggle="pill"
                            data-bs-target="#positives-pills-{{ $category->id }}" type="button"
                            role="tab" aria-controls="positives-pills-{{ $category->id }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>
            <div class="positives__navTabs-content tab-content flex-grow-1" id="positives-pills-tabContent">
                @foreach($template as $key => $category)
                    <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                         id="positives-pills-{{ $category->id }}" role="tabpanel"
                         aria-labelledby="positives-pills-{{ $category->id }}-tab" tabindex="0">
                        <img class="img-fluid rounded-16px"
                             src="{{ \Illuminate\Support\Facades\Storage::url($category->image) }}" alt="{{ $category->name }}-img" width="929" height="501" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
