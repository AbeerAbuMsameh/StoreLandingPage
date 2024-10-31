@props(['name', 'id', 'placeholder', 'attributes' => '', 'options' => [], 'selected' => null])

<div class="mb-20">
    <select name="{{ $name }}" id="{{ $id }}" class="text-capitalize form-select"{{ $attributes }}>
        <option class="text-capitalize text-7e" value="" selected disabled>{{ $placeholder }}</option>
        @foreach($options as $option)
            <option value="{{ $option['value'] }}" {{ (string) $selected === (string) $option['value'] ? 'selected' : '' }}>
                {{ $option['label'] }}
            </option>
        @endforeach
    </select>
    @if ($errors->has($name))
            <div class="mt-10 d-flex flex gap-10">
                <svg class="flex-shrink-0" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d71b22">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
                </svg>
                <p class="fs-14px text-danger fw-normal mb-0 text-start pt-4">
                    {{ $errors->first($name) }}
                </p>

        </div>
    @endif
</div>
