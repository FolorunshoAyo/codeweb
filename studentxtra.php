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
    <!-- FONT AWESOME CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Slick plugin stylesheet -->
    <link rel="stylesheet" href="assets/css/slick/slick.css">
    <!-- CUSTOM SLIDER STYLING -->
    <link rel="stylesheet" href="assets/css/slider-theme.css" type="text/css">
    <!-- Header CSS -->
    <link rel="stylesheet" href="assets/css/sections/header.css" type="text/css" />
    <!-- FOOTER CSS -->
    <link rel="stylesheet" href="assets/css/sections/footer.css" type="text/css" />
    <!-- Custom CSS (HOME) -->
    <link rel="stylesheet" href="assets/css/home.css" type="text/css">
    <!-- STUDENT XTRA STYLESHEET -->
    <link rel="stylesheet" href="assets/css/studentxtra.css">
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
    <title>Codeweb : Home Page</title>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <a href="./">
                    <img src="assets/images/logo.jpg" alt="Logo" class="logo image">
                </a>
            </div>

            <nav class="nav-link-container">
                <ul class="nav-links">
                    <li class="nav-link-item">
                        <a href="ourschool" class="nav-link">our school</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="laptopsales" class="nav-link">laptop sales</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="studentxtra" class="nav-link active">studentXtra</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="itconsumables" class="nav-link">IT consumables</a>
                    </li>
                </ul>
            </nav>

            <div class="burger-menu">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>

            <div class="mobile-menu">
                <ul class="mobile-list">
                    <li class="mobile-list-item">
                        <a href="ourschool" class="mobile-nav-link">our school</a>
                    </li>
                    <li class="mobile-list-item">
                        <a href="laptopsales" class="mobile-nav-link">laptop sales</a>
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
        <section class="students-slider-section">
            <div class="student-slider-container">
                <div class="student-slider slider">
                    <div>
                        <img src="assets/images/students-1.jpg" alt="#" class="rounded">
                    </div>
                    <div>
                        <img src="assets/images/students-2.png" alt="#" class="rounded">
                    </div>
                    <div>
                        <img src="assets/images/students-3.jpg" alt="#" class="rounded">
                    </div>
                </div>
            </div>
        </section>
        <section class="savings-and-loan-section">
            <div class="savings-and-loan-container">
                <h1 class="main-title">Savings and Loans at your Fingertips</h1>

                <p class="savings-and-loan-text">
                    Start saving today with any one of our saving tiers and qualify for loans to help you pay your fees,
                    get a laptop or get support.
                </p>
            </div>
        </section>
        <section class="how-it-works-section">
            <div class="how-it-works-container">
                <img src="assets/images/how-it-works.png" alt="How it works image">
            </div>
        </section>
        <section class="signup-and-enquiries-section">
            <div class="signup-and-enquiries-container">
                <div class="signup-container">
                    <p class="signup-text">
                        Ready to join the <span class="xtra-text">xtra</span> train? <br>
                        Register with us today.
                    </p>

                    <a href="https://www.studentxtra.codeweb.ng" class="signup-btn">Sign Up</a>
                </div>

                <div class="enquiries-container">
                    <div class="enquiry-image-container">
                        <img src="assets/images/girl-intro.jpg" alt="Girl Into">
                    </div>

                    <div class="enquiries-textbox">
                        <h1 class="main-title">For more enquiries</h2>

                        <p class="enquiries-text">Get in touch with us and we would be sure to get back to you</p>

                        <div class="address-info">
                            <div class="contact-info">
                                <i class="fas fa-phone"></i>
                                +234 70 267 904 25
                            </div>
                            <div class="contact-info">
                                <i class="fas fa-envelope"></i>
                                support@codeweb.com
                            </div>
                            <div class="contact-info">
                                <i class="fas fa-location-arrow"></i>
                                Shop 120, Activities center, LASPOTECH,
                                Ikorodu Lagos.
                            </div>
                        </div>
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
        $(function () {
            const burgerMenu = $(".burger-menu");
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

                if(currentPagePosition > 400){
                    scrollUpBtnCnt.fadeIn();
                }else{
                    scrollUpBtnCnt.fadeOut();
                }

                header[0].classList.toggle("sticky", $(window)[0].scrollY > 180);
            });

            $('.scrollup-btn').on('click', function() {
            $('html, body').animate({scrollTop : 0},800);
            return false;
            });

            // Event Handler for Burger Menu Toggle
            burgerMenu.on("click", () => {
                burgerMenu.toggleClass("active");
                mobileNav.toggleClass("active");
            });

            // SMOOTH SCROLL FUNCTIONALITY
            // Smooth scroll function declaration for handling smooth document fragmenting.
            const smoothScroll = (buttonID, location, duration) => {
                $(buttonID).on("click", (e) => {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(location).offset().top
                    }, duration);
                })
            };

            smoothScroll(".collaborate-btn-container button", "#services", 3000)
        });
    </script>
</body>

</html>