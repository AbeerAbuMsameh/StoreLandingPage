<!-- AOS JS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Bootstrap JS -->
<script src = {{asset('./main/assets/js/bootstrap.bundle.min.js')}}></script>

<script src = {{asset('./main/assets/js/main.js')}}></script>

<script>
    AOS.init({
        once: true,
    })

    let partnersSwiper = new Swiper('.partnersSwiper', {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        spaceBetween: 20,
        breakpoints: {
            768: {
                spaceBetween: 40,
            },
            1170: {
                spaceBetween: 100,
            },
        },
        grabCursor: true,
        slidesPerView: 'auto',
    })

    window.addEventListener('scroll', function () {
        const homeLogo = document.querySelector('.navbar-logo-home')
        const pagesLogo = document.querySelector('.navbar-logo-pages')

        const navbarLinks = document.querySelectorAll(
            '.navbar-nav .mainNavbar__menuLink',
        )
        const logInBtn = document.querySelector(
            '.mainNavbar__offcanvas .outlineBtnHoverEffect',
        )
        const langSwich = document.querySelector(
            '.dropdownLang .colorLinksUnderLg',
        )

        navbarLinks.forEach((link) => {
            if (window.scrollY > 10) {
                homeLogo.style.display = 'none'
                pagesLogo.style.display = 'block'
                link.style.color = '#000'
                link.classList.remove('text-white')
                logInBtn.style.color = '#000'
                logInBtn.classList.remove('text-white')
                langSwich.style.color = '#000'
                langSwich.classList.remove('text-white')
            } else {
                homeLogo.style.display = 'block'
                pagesLogo.style.display = 'none'
                link.classList.add('text-white')
                logInBtn.classList.add('text-white')
                langSwich.classList.add('text-white')
            }
        })
    })
</script>

