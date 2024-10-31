@props(['name'])

@error($name)
<div class="invalid-feedback">
    <div class="mt-10 d-flex flex gap-10">
        @if($name != "terms")
            <svg class="flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke-width="1.5" stroke="#d71b22">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
            </svg>
            <p class="fs-14px text-danger fw-normal mb-0 text-start pt-4">
                {{ $message }}
            </p>
        @endif
    </div>
</div>
@enderror


