@props(['type' => 'text', 'name', 'id' => null, 'placeholder' => '', 'value' => null])

<div class="mb-20">
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id ?? $name }}"
        class="form-control"
        placeholder="{{ $placeholder }}"
        value="{{ old($name, $value) }}"
        {{ $attributes }}
    />

    @if ($errors->has($name))
        <div class="mt-5 d-flex gap-10">
            <svg class="flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d71b22">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
            </svg>
            <p class="fs-14px text-danger fw-normal mt-0 text-start pt-14 items-center">
                {{ $errors->first($name) }}
            </p>
        </div>
    @endif
</div>
