@extends('main.layouts.create-store')

@push('style')
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'ku')
        <link rel="stylesheet" href="{{ asset('main/assets/css/create-store.rtl.min.css') }}" />
    @else
        <link rel="stylesheet" href="{{asset('./main/assets/css/create-store.min.css')}}" />
    @endif
@endpush

@section('content')
    @livewire('create-store')

@endsection

@push('script')
    <script>
        // Intit AOS
        AOS.init({
            once: true,
        })

        const input = document.querySelector('#signup-phone')
        window.intlTelInput(input, {
            separateDialCode: true,
        })

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach((form) => {
            form.addEventListener(
                'submit',
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                },
                false,
            )
        })

        // Toggle password visibility
        const togglePasswordButtons =
            document.querySelectorAll('.toggle-password')

        togglePasswordButtons.forEach((button) => {
            button.addEventListener('click', function () {
                const passwordInput = this.previousElementSibling
                const type =
                    passwordInput.getAttribute('type') === 'password'
                        ? 'text'
                        : 'password'
                passwordInput.setAttribute('type', type)

                // Toggle icon
                this.querySelector('i').classList.toggle('bi-eye')
                this.querySelector('i').classList.toggle('bi-eye-slash')
            })
        })

        // Form validation
        const passwordInput = document.querySelector('#signup-password')
        const repeatPasswordInput = document.querySelector(
            '#signup-repeatPassword',
        )
        const submitButton = document.querySelector('#submit-button')
        const matchError = document.querySelector('#match-error')

        submitButton.addEventListener('click', function (e) {
            // Hide previous error
            matchError.style.display = 'none'

            // Validate passwords match
            if (passwordInput.value !== repeatPasswordInput.value) {
                matchError.style.display = 'block'
            }
        })

    </script>
@endpush
