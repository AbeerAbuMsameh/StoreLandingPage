@props(['question', 'answer', 'id'])
<div class="accordion-item transition-300ms border-0 mb-30">
    <h2 class="accordion-header rounded-0">
        <button
            class="accordion-button bg-transparent gap-5 shadow-none fs-22px collapsed py-20 py-md-30"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#{{$id}}"
            aria-expanded="false"
            aria-controls="accordionForFAQCollapse{{$id}}"
        >
            {{$question}}
        </button>
    </h2>
    <div
        id="{{$id}}"
        class="accordion-collapse collapse"
        data-bs-parent="#accordionForFAQ"
    >
        <div class="accordion-body text-c83">
            {{$answer}}
        </div>
    </div>
</div>