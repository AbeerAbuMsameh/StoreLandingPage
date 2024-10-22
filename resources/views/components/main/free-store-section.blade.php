@props(['title','link', 'description','button_name'])

<section class="getStoreNow mt-70 mt-md-130 bg-f9 py-70">
    <div class="container containerEdit">
        <p class="fw-medium fs-60px mb-15 text-center" data-aos="fade-up">
            {{$title}}
        </p>
        <p class="fs-24px text-center mb-30 getStoreNow__subtitles mx-auto" data-aos="fade-up">
            {{$description}}
        </p>
        <div class="d-flex justify-content-center" data-aos="fade-up">
            <a href="{{ $link }}" type="button"
               class="primaryBtnHoverEffect transition-300ms text-decoration-none btn btn-primary text-capitalize m-0 py-15 px-25 rounded-8px">{{$button_name}}
            </a>
        </div>
    </div>
</section>
