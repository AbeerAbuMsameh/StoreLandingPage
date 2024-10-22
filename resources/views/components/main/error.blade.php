@props(['name'])

@error($name)
<div class=" invalid-feedback mt-10 d-flex flex gap-10 ">
    <svg class="svgStorke flex-shrink-0" width="25" height="25"
         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"
        ></path>
    </svg>
    <p class="invalid-feedback fs-14px text-primary fw-normal mb-0 text-start pt-4 ">
        {{ $message }}
    </p>
</div>
@enderror
