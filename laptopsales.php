<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/images/logo.jpg">
    <!-- Bootstrap 5 stylesheet-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <!-- Custom Fonts (KyivType Sans and Inter) -->
    <link rel="stylesheet" href="assets/css/fonts.css">
    <!-- initial config css file -->
    <link rel="stylesheet" href="assets/css/base.css">
    <!-- Slick plugin stylesheet -->
    <link rel="stylesheet" href="assets/css/slick/slick.css">
    <!-- CUSTOM SLIDER STYLING -->
    <link rel="stylesheet" href="assets/css/slider-theme.css" type="text/css">
    <!-- Header CSS -->
    <link rel="stylesheet" href="assets/css/sections/header.css" type="text/css" />
    <!-- FOOTER CSS -->
    <link rel="stylesheet" href="assets/css/sections/footer.css" type="text/css" />
    <!-- CUSTOM CSS (HOME)-->
    <link rel="stylesheet" href="assets/css/home.css" type="text/css">
    <!-- LAPTOP SALES STYLESHEET -->
    <link rel="stylesheet" href="assets/css/laptopsales.css" type="text/css">
    <!-- MEDIA QUERIES -->
    <link rel="stylesheet" href="assets/css/media-queries/main-mediaquery.css">
    <style>
        .nav-link-item a {
            color: var(--black);
        }

        .nav-link.active {
            color: var(--primary-color);
        }
    </style>
    <title>Codeweb : Laptop Sales</title>
</head>

<body>
    <header id="header">
        <div class="header-container">
            <div class="logo-container">
                <a href="./">
                    <img src="assets/images/logo.jpg" alt="Logo" class="logo image" />
                </a>
            </div>

            <nav class="nav-link-container">
                <ul class="nav-links">
                    <li class="nav-link-item">
                        <a href="./ourschool" class="nav-link">our school</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="./laptopsales" class="nav-link active">Laptop Sales</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="../cash-and-carry/" class="nav-link">Our store</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="./studentxtra" class="nav-link">studentXtra</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="./itconsumables" class="nav-link">IT consumables</a>
                    </li>
                </ul>
            </nav>

            <div class="burger-menu-container">
                <div class="burger-menu"></div>
            </div>

            <!-- User Icon -->
            <!-- <div class="person logged_in">
          <a href="./login"><i class="fa fa-user-circle"></i> Joseph</a>
        </div> -->

            <div class="mobile-menu">
                <ul class="mobile-list">
                    <li class="mobile-list-item">
                        <a href="ourschool" class="mobile-nav-link">our school</a>
                    </li>
                    <li class="mobile-list-item">
                        <a href="laptopsales" class="mobile-nav-link">Laptop Sales</a>
                    </li>
                    <li class="mobile-list-item">
                        <a href="../cash-and-carry/" class="mobile-nav-link">Our store</a>
                    </li>
                    <li class="mobile-list-item">
                        <a href="studentxtra" class="mobile-nav-link">studentXtra</a>
                    </li>
                    <li class="mobile-list-item">
                        <a href="itconsumables" class="mobile-nav-link">IT consumables</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="scrollup-btn-container">
            <button class="scrollup-btn"><i class="fa fa-arrow-up"></i></button>
        </div>
        <section class="get-laptop-section">
            <div class="get-laptop-container">
                <h1 class="main-title">Get a laptop today</h1>

                <div class="laptop-chain-container">
                    <img src="assets/images/circles.png" alt="">
                </div>
            </div>
        </section>
        <section class="laptops-slider-section">
            <div class="laptop-slider-container">
                <h1 class="main-title">Laptops</h1>

                <div class="divider"></div>

                <div class="laptop-batch-slider slider">
                    <div class="laptops-batch batch-1">
                        <div class="laptop-batch-container">
                            <!-- Batches of laptops here -->
                            <div class="laptop-object object-1">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt2.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-2">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lap2.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-3">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt2.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-4">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lappy1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-5">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt2.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-6">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="laptops-batch batch-2">
                        <div class="laptop-batch-container">
                            <!-- Batches of laptops here -->
                            <div class="laptop-object object-1">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lappy1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-2">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt2.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-3">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lappy1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-4">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lappy1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-5">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-6">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt2.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="laptops-batch batch-3">
                        <div class="laptop-batch-container">
                            <!-- Batches of laptops here -->
                            <div class="laptop-object object-1">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lappy1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-2">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lap2.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-3">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lappy1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-4">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-5">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lt2.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="laptop-object object-6">
                                <figure class="laptop-image-container">
                                    <img src="assets/images/lappy1.jpg" alt="#">
                                    <figcaption>
                                        Laptop name and model <br><br>
                                        <button class="view-btn">view</button>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="view-all-container">
                    <button>view all</button>
                </div>
            </div>
        </section>
        <section class="main-brands-section">
            <div class="main-brands-container">
                <h1 class="main-title">Shop our main brands</h1>

                <p class="main-brands-text">
                    Get the brand of your choice from any one of our selected top brands
                    available
                </p>

                <div class="brands-slider slider">
                    <div class="brand-group">
                        <figure>
                            <div class="brand-logo-container">
                                <img src="assets/images/apple-logo.png" alt="#">
                            </div>
                            <figcaption>Mac</figcaption>
                        </figure>
                    </div>
                    <div class="brand-group">
                        <figure>
                            <div class="brand-logo-container">
                                <img src="assets/images/hp-black.png" alt="#">
                            </div>
                            <figcaption>HP</figcaption>
                        </figure>
                    </div>
                    <div class="brand-group">
                        <figure>
                            <div class="brand-logo-container">
                                <img src="assets/images/dell-logo.png" alt="#">
                            </div>
                            <figcaption>dell</figcaption>
                        </figure>
                    </div>
                    <div class="brand-group">
                        <figure>
                            <div class="brand-logo-container">
                                <img src="assets/images/lenovo.png" alt="#">
                            </div>
                            <figcaption>lenovo</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial-and-benefits-section">
            <div class="testimonial-and-benefits-container">
                <div class="testimonial-slider-container">
                    <div class="testimonial-slider slider">
                        <div class="testimonial testimonial-1">
                            <h3 class="testimonial-title">Testimonial #1</h3>

                            <p class="testimonial-caption">
                                I got my brand new laptop at an affordable price from codeweb and I am very satisfied! I
                                totally recommend getting yours from them too.
                            </p>
                        </div>
                        <div class="testimonial testimonial-2">
                            <h3 class="testimonial-title">Testimonial #2</h3>

                            <p class="testimonial-caption">
                                I never knew of this platform until recently and I'm so glad I found them! They
                                literally have the best prices and I finally got my laptop a few days ago. I love it so
                                much, thank you codeweb!
                            </p>
                        </div>
                        <div class="testimonial testimonial-3">
                            <h3 class="testimonial-title">Testimonial #3</h3>

                            <p class="testimonial-caption">
                                I liked getting my devices from physical stores until I discovered codeweb. What you see
                                is truly what you get. I wanted a laptop and I got the exact thing no difference!
                                Codeweb is a genuine lifesaver, get your laptops from them and I promise you won't
                                regret it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="benefits-container">
                    <div class="benefits-wrapper">
                        <h1 class="benefits-title">When you shop with us, you get:</h1>
                        <ul class="benefits-list">
                            <li class="benefit-list-item">
                                <i class="fas fa-check"></i>
                                Super secure transactions
                            </li>
                            <li class="benefit-list-item">
                                <i class="fas fa-check"></i>
                                Quality for affordable prices
                            </li>
                            <li class="benefit-list-item">
                                <i class="fas fa-check"></i>
                                Excellent customer services
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col3 col-sm-12">
                    <div class="footer-logo-container">
                        <img src="assets/images/logo.jpg" alt="Footer Logo" class="footer-logo">
                    </div>
                </div>
                <div class="footer-col3 col-sm-12">
                    <div class="footer-text">
                        Codeweb Coding Academy is an institution that gives 100% practical classes to students who
                        pursue a
                        Career in any of our available courses. Be job ready with our certified ICT Training.
                        For more enquiries: info@codeweb.org.ng
                    </div>
                </div>
                <div class="footer-col3 col-sm-12">
                    <ul class="social-media-links">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            &copy; Copyright Codeweb 2022.
        </div>
    </footer>
    <!-- FONT AWESOME JIT SCRIPT-->
    <script src="https://kit.fontawesome.com/3ae896f9ec.js" crossorigin="anonymous"></script>
    <!-- JQUERY SCRIPT -->
    <script src="assets/js/jquery/jquery-3.6.min.js"></script>
    <!-- JQUERY MIGRATE SCRIPT (FOR OLDER JQUERY PACKAGES SUPPORT)-->
    <script src="assets/js/jquery/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/slick/slick.js"></script>
    <script>
        $(function() {
            const burgerMenu = $(".burger-menu-container");
            const mobileNav = $(".mobile-menu");
            const scrollUpBtnCnt = $(".scrollup-btn-container");

            // LAPTOP BATCH SLIDER
            $('.laptop-batch-slider').slick({
                dots: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                slidesToShow: 1,
                autoplaySpeed: 3000
            });

            // LAPTOP BRANDS SLIDER
            // $('.brands-slider').slick({
            //     slidesToShow: 3,
            //     slidesToScroll: 1,
            //     autoplay: true,
            //     autoplaySpeed: 2000
            // });

            $('.brands-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 712,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            //TESTIMONIAL SLIDER
            $('.testimonial-slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 3000
            });

            //CHANGING ALL ARROW BUTTONS TO ARROWS
            $(".slick-next").each(function() {
                $(this).html("<i class='fas fa-arrow-right'></i>");
            });
            $(".slick-prev").each(function() {
                $(this).html("<i class='fas fa-arrow-left'></i>")
            });

            //HEADER STICKY FUNCTIONALITY
            // Jquery handler for displaying sticky header upon scroll.
            $(window).on("scroll", () => {
                let header = $("header");
                let currentPagePosition = $(window).scrollTop();

                if (currentPagePosition > 400) {
                    scrollUpBtnCnt.fadeIn();
                } else {
                    scrollUpBtnCnt.fadeOut();
                }

                header[0].classList.toggle("sticky", $(window)[0].scrollY > 180);
            });

            $('.scrollup-btn').on('click', function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            // Event Handler for Burger Menu Toggle
            burgerMenu.on("click", () => {
                burgerMenu.toggleClass("active");
                mobileNav.toggleClass("active");
            });
        });
    </script>
</body>

</html>