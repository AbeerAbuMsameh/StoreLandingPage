window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.mainNavbar')

  if (window.scrollY > 10) {
    navbar.classList.add('mainNavbarScrolled')
  } else {
    navbar.classList.remove('mainNavbarScrolled')
  }
})
