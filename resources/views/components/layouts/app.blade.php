<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}-GB">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @hasSection('meta')
        @yield('meta')
    @endif
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" sizes="36x36" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" async>

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="{{ asset('') }}" crossorigin>
    <!-- Preload and apply Bootstrap -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </noscript>

    <!-- Fancybox -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    </noscript>

    <!-- Bootstrap Icons -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </noscript>

    <!-- Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
    </noscript>
    <!-- jQuery (no issues here) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Slick Carousel CSS -->
    <link rel="preload" href="{{ asset('assets/slick/slick.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/slick/slick-theme.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    </noscript>


    <link rel="preload" href="{{ asset('assets/css/animate.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/media.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
    </noscript>




    @livewireStyles()
    @stack('styles')

</head>

<body>
    @livewire('partials.header')<main>{{ $slot }}</main>
    @livewire('partials.footer')


    <a href="#" class="scrollup">Scroll</a>
    <!-- jQuery -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>


    <script>
        const menu = document.querySelector(".menu");
        const menuMain = menu.querySelector(".menu-main");
        const goBack = menu.querySelector(".go-back");
        const menuTrigger = document.querySelector(".mobile-menu-trigger");
        const closeMenu = menu.querySelector(".mobile-menu-close");
        let subMenu;
        menuMain.addEventListener("click", (e) => {
            if (!menu.classList.contains("active")) {
                return;
            }
            if (e.target.closest(".menu-item-has-children")) {
                const hasChildren = e.target.closest(".menu-item-has-children");
                showSubMenu(hasChildren);
            }
        });
        goBack.addEventListener("click", () => {
            hideSubMenu();
        });
        menuTrigger.addEventListener("click", () => {
            toggleMenu();
        });
        closeMenu.addEventListener("click", () => {
            toggleMenu();
        });
        document.querySelector(".menu-overlay").addEventListener("click", () => {
            toggleMenu();
        });

        function toggleMenu() {
            menu.classList.toggle("active");
            document.querySelector(".menu-overlay").classList.toggle("active");
        }

        function showSubMenu(hasChildren) {
            subMenu = hasChildren.querySelector(".sub-menu");
            subMenu.classList.add("active");
            subMenu.style.animation = "slideLeft 0.5s ease forwards";
            const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0]
                .textContent;
            menu.querySelector(".current-menu-title").innerHTML = menuTitle;
            menu.querySelector(".mobile-menu-head").classList.add("active");
        }

        function hideSubMenu() {
            subMenu.style.animation = "slideRight 0.5s ease forwards";
            setTimeout(() => {
                subMenu.classList.remove("active");
            }, 300);
            menu.querySelector(".current-menu-title").innerHTML = "";
            menu.querySelector(".mobile-menu-head").classList.remove("active");
        }

        window.onresize = function() {
            if (this.innerWidth > 991) {
                if (menu.classList.contains("active")) {
                    toggleMenu();
                }
            }
        };
    </script>

    <script>
        $(".jumper").on("click", function(e) {
            e.preventDefault();
            $("body, html").animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 600);
        });
    </script>

    <script>
        $(document).ready(function() {

            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox]', {});
    </script>

    <script>
        $(document).ready(function() {
            $(".list").click(function() {
                const dataValue = $(this).attr("data-filter")
                if (dataValue == "all-items") {
                    $(".image-item").show()
                } else {
                    $(".image-item").not("." + dataValue).hide()
                    $(".image-item").filter("." + dataValue).show()
                }
            })
        })
        $(".list").click(function() {
            $(this).addClass("active").siblings().removeClass("active")
        })
    </script>

    <script src="{{ asset('assets/js/showmoreless.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('.show-less-div-1').myOwnLineShowMoreLess({
                showLessLine: 3
            });
        });
    </script>

    <script src="{{ asset('assets/slick/slick.min.js') }}" defer></script>

    <script>
        $(document).ready(function() {

            $(".hero-slider").slick({
                autoplay: true,
                autoplaySpeed: 9000,
                speed: 700,
                mobileFirst: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: false,
                dots: false,
                arrows: false,

                respondTo: 'min',
                cssEase: 'linear',
                prevArrow: '<button class="PrevArrow"></button>',
                nextArrow: '<button class="NextArrow"></button>',
            });

            $(".service-slider").slick({
                dots: false,
                arrows: true,
                infinite: true,
                speed: 300,
                autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 1,

                respondTo: 'min',
                cssEase: 'linear',
                prevArrow: '<button class="PrevArrow"><i class="bi bi-chevron-left"></i></button>',
                nextArrow: '<button class="NextArrow"><i class="bi bi-chevron-right"></i></button>',

                responsive: [{
                        breakpoint: 1400,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]

            });

            $(".how-it-work-slider").slick({
                arrows: false,
                dots: true,
                infinite: true,
                initialSlide: 0,
                slidesToScroll: 1,
                slidesToShow: 1
            });

            $(".testimonis").slick({
                dots: false,
                arrows: true,
                infinite: true,
                speed: 300,
                autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 1,

                respondTo: 'min',
                cssEase: 'linear',
                prevArrow: '<button class="PrevArrow"><i class="bi bi-chevron-left"></i></button>',
                nextArrow: '<button class="NextArrow"><i class="bi bi-chevron-right"></i></button>',

                responsive: [{
                        breakpoint: 1400,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]

            });

        });
    </script>


    @livewireScripts()

    @stack('scripts')
</body>

</html>
