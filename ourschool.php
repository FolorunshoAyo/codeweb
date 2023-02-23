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
    <link rel="stylesheet" href="assets/css/home.css" type="text/css" type="text/css">
    <!-- OUR SCHOOL STYLESHEET -->
    <link rel="stylesheet" href="assets/css/ourschool.css" type="text/css">
    <!-- MEDIA QUERIES -->
    <link rel="stylesheet" href="assets/css/media-queries/main-mediaquery.css" type="text/css">
    <style>
        .nav-link-item a {
            color: var(--black);
        }

        .nav-link.active {
            color: var(--primary-color);
        }
    </style>
    <title>Codeweb : Our School</title>
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
                        <a href="./ourschool" class="nav-link active">our school</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="./laptopsales" class="nav-link">Laptop Sales</a>
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
                        <a href="laptopsales" class="mobile-nav-link">laptop sales</a>
                    </li>
                    <li class="mobile-list-item">
                        <a href="../cash-and-carry/" class="mobile-nav-link">our store</a>
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
        <section class="learn-with-us-section">
            <div class="learn-with-us-container">
                <h1 class="main-title">Learn with us</h1>
                <p class="learn-with-us-text">
                    Codeweb coding academy brings you the best quality trainings in various IT skillsets at extremely
                    affordable rates.
                    we also offer flexible payment plans that are cost effective
                </p>
            </div>
        </section>
        <section class="our-school-slider-section">
            <!-- Slide show here-->
            <div class="slider">
                <div>
                    <img src="assets/images/modern-wooden-kitchen-interior-steel-kitchen-faucet 2.png" alt="A lady training a student using a system">
                </div>
                <div>
                    <img src="assets/images/student-6.png" alt="A student smiling in front of a laptop" class="rounded">
                </div>
                <div>
                    <img src="assets/images/student-7.png" alt="A thinking in front of his laptop" class="rounded">
                </div>
            </div>
        </section>
        <section class="courses-section">
            <div class="courses-container">
                <h1 class="main-title">Browse Our Courses</h1>
                <div class="hot-offer-wrapper">
                    <div class="hot-offer-container">
                        <div>
                            <span class="hot-offer-text">Hot offer!!!</span> First 10 students to enroll in any course gets 20%
                            off total fee.
                        </div>

                        <div>
                            <span class="hot-offer-text">Hot offer!!!</span> First 10 students to enroll in any course gets 20%
                            off total fee.
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col3 col-sm-12">
                            <div class="service-group">
                                <img src="assets/images/old-wood-grain-background 2.png" alt="A lady training a student using a system" class="service-group-image">
                                <h3 class="service-group-title">Software Development</h3>

                                <ul class="service-group-list">
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Front-end
                                    </li>
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Back-end
                                    </li>
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Full-stack
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col3 col-sm-12">
                            <div class="service-group">
                                <img src="assets/images/wood-texture-design-decoration 1.png" alt="A lady training a student using a system" class="service-group-image">
                                <h3 class="service-group-title">Graphic design</h3>

                                <ul class="service-group-list">
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Word class engineers
                                    </li>
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Application engineers
                                    </li>
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Business Solutions
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col3 col-sm-12">
                            <div class="service-group">
                                <img src="assets/images/pale-oak-wood-texture-design-background 1.png" alt="A lady training a student using a system" class="service-group-image">
                                <h3 class="service-group-title">Tech Consumables</h3>

                                <ul class="service-group-list">
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Laptops
                                    </li>
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Devices
                                    </li>
                                    <li class="service-group-list-item">
                                        <i class="fas fa-check"></i>
                                        Others
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="enroll-section">
            <div class="enroll-container">
                <h1 class="main-title">Enroll now</h1>
                <p class="enroll-text">With us, you can:</p>

                <div class="enrollment-reasons-container">
                    <ul class="enrollment-reasons">
                        <li class="enrollment-reason-list-item">
                            <i class="fas fa-check"></i>
                            Launch a career in the tech industry
                        </li>
                        <li class="enrollment-reason-list-item">
                            <i class="fas fa-check"></i>
                            Become a developer in no time
                        </li>
                        <li class="enrollment-reason-list-item">
                            <i class="fas fa-check"></i>
                            Apply for internship and industrial training
                        </li>
                        <li class="enrollment-reason-list-item">
                            <i class="fas fa-check"></i>
                            Enjoy flexiible payment plans and cost-effectiveness
                        </li>
                    </ul>

                    <div class="enroll-btn-container">
                        <a href="#" class="enroll-btn">Enroll</a>
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
                        Codeweb Coding Academy is an institution that gives 100% practical classes to students who pursue a
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

            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 3000
            });

            //CHANGING THE ARROW BUTTONS TO ARROWS
            $(".slick-next").html("<i class='fas fa-arrow-right'></i>");
            $(".slick-prev").html("<i class='fas fa-arrow-left'></i>");

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