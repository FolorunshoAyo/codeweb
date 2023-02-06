<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/images/logo.jpg" />
    <!-- Bootstrap 5 stylesheet-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <!-- Custom Fonts (KyivType Sans and Inter) -->
    <link rel="stylesheet" href="assets/css/fonts.css" />
    <!-- initial config css file -->
    <link rel="stylesheet" href="assets/css/base.css">
    <!-- FONT AWESOME CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Slick plugin stylesheet -->
    <link rel="stylesheet" href="assets/css/slick/slick.css" />
    <!-- CUSTOM SLIDER STYLING -->
    <link rel="stylesheet" href="assets/css/slider-theme.css" type="text/css" />
    <!-- Header CSS -->
    <link rel="stylesheet" href="assets/css/sections/header.css" type="text/css" />
    <!-- FOOTER CSS -->
    <link rel="stylesheet" href="assets/css/sections/footer.css" type="text/css" />
    <!-- HOME CSS -->
    <link rel="stylesheet" href="assets/css/home.css" type="text/css">
    <!-- MEDIA QUERIES -->
    <link rel="stylesheet" href="assets/css/media-queries/main-mediaquery.css" />
    <title>Codeweb : Home Page</title>
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
              <a href="./laptopsales" class="nav-link">laptop sales</a>
            </li>
            <li class="nav-link-item">
              <a href="./studentxtra" class="nav-link">studentXtra</a>
            </li>
            <li class="nav-link-item">
              <a href="./itconsumables" class="nav-link">IT consumables</a>
            </li>
          </ul>
        </nav>

        <div class="burger-menu">
          <div class="line line1"></div>
          <div class="line line2"></div>
          <div class="line line3"></div>
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
              <a href="laptopsales" class="mobile-nav-link"
                >laptop sales</a
              >
            </li>
            <li class="mobile-list-item">
              <a href="studentxtra" class="mobile-nav-link"
                >studentXtra</a
              >
            </li>
            <li class="mobile-list-item">
              <a href="itconsumables" class="mobile-nav-link"
                >IT consumables</a
              >
            </li>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <div class="scrollup-btn-container">
        <button class="scrollup-btn"><i class="fa fa-arrow-up"></i></button>
      </div>
      <section class="hero-section">
        <div class="hero-container">
          <div class="hero-text-box">
            <h1 class="hero-title">
              Easier<br />
              Digital <br />
              Solutions
            </h1>
            <p class="hero-text">
              Bringing you one step closer <br />
              to cutting edge technology.
            </p>
            <button class="hero-btn">Learn More</button>
          </div>
          <div class="hero-image-container">
            <!-- <img 
                    srcset="
                        assets/images/Woman-427.png 427w,
                        assets/images/Woman-469.png 468w,
                        assets/images/Woman-576.png 576w,
                        assets/images/Woman-1067.png 1067w,
                    "
                    sizes="
                        (max-width: 600px) 576px,
                        (max-width: 450px) 468px,
                        (max-width: 400px) 427px
                        1067px
                    "
                    src="assets/images/Woman.png" 
                    alt="Customer care lady on call" class="hero-image"> -->
            <img
              src="assets/images/Woman.png"
              alt="Customer care lady on call"
              class="hero-image"
            />
          </div>
        </div>
      </section>
      <section class="services-section" id="services">
        <div class="services-container">
          <h1 class="title">Services We Offer</h1>
          <div class="container">
            <div class="row">
              <div class="col3 col-sm-12">
                <div class="service-group">
                  <img
                    src="assets/images/old-wood-grain-background 2.png"
                    alt="A lady training a student using a system"
                    class="service-group-image"
                  />
                  <h3 class="service-group-title">IT School</h3>

                  <ul class="service-group-list">
                    <li class="service-group-list-item">
                      <i class="fas fa-check"></i>
                      Learn in-demand skills
                    </li>
                    <li class="service-group-list-item">
                      <i class="fas fa-check"></i>
                      Hands-on practicals
                    </li>
                    <li class="service-group-list-item">
                      <i class="fas fa-check"></i>
                      Very affordable
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col3 col-sm-12">
                <div class="service-group">
                  <img
                    src="assets/images/wood-texture-design-decoration 1.png"
                    alt="A lady training a student using a system"
                    class="service-group-image"
                  />
                  <h3 class="service-group-title">building solutions</h3>

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
                  <img
                    src="assets/images/pale-oak-wood-texture-design-background 1.png"
                    alt="A lady training a student using a system"
                    class="service-group-image"
                  />
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
      <section class="portfolio-section">
        <div class="portfolio-container">
          <h1 class="title">Our Work</h1>

          <!-- Slide show here-->
          <div class="slider">
            <div>
              <img
                src="assets/images/modern-wooden-kitchen-interior-steel-kitchen-faucet 2.png"
                alt="A lady training a student using a system"
              />
            </div>
            <div>
              <img
                src="assets/images/modern-wooden-kitchen-interior-steel-kitchen-faucet 2.png"
                alt="A lady training a student using a system"
              />
            </div>
            <div>
              <img
                src="assets/images/modern-wooden-kitchen-interior-steel-kitchen-faucet 2.png"
                alt="A lady training a student using a system"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="collaborate-section">
        <div class="collaborate-container">
          <h1 class="title">Why you should work with us</h1>
          <div class="container">
            <div class="row">
              <div class="col2 col-sm-12">
                <div class="collaborate-image-container">
                  <img
                    src="assets/images/video.png"
                    alt="Dev team brainstorming"
                    class="collaborate-image"
                  />
                </div>
              </div>
              <div class="col2 col-sm-12">
                <ul class="reasons-list">
                  <li class="reasons-list-item">Top class digital solutions</li>
                  <li class="reasons-list-item">Agile Development</li>
                  <li class="reasons-list-item">
                    Our dedication to best suit the challenge at hand
                  </li>
                  <li class="reasons-list-item">
                    Leveraging word-class engineers to get your business up and
                    running
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="collaborate-btn-container">
            <button class="btn">Pick a service</button>
          </div>
        </div>
      </section>
      <section class="aboutus-section">
        <div class="aboutus-container">
          <div class="aboutus-text-box">
            <h1 class="title">About Us</h1>
            <p class="text">
              Codeweb is a technology company that provides
              engineering-as-a-service solutions to businesses and organisations
              accross various industries.
            </p>

            <p class="text">
              From our educational, consumable and digital solutions, we aim to
              facilitate a more technologically driven world.
            </p>
          </div>

          <div class="aboutus-gallery">
            <img
              src="assets/images/person-taking-measures-wood 1.png"
              alt="#"
              class="aboutus-img img1"
            />
            <img
              src="assets/images/portrait-young-motivated-carpenter-standing-by-woodworking-machine-his-carpentry-workshop 1.png"
              alt="#"
              class="aboutus-img img2"
            />
            <img
              src="assets/images/cropped-man-wearing-blue-overall-drawing-furniture-sheet-paper 1.png"
              alt="#"
              class="aboutus-img img3"
            />
          </div>
        </div>
      </section>
      <section class="contactus-section">
        <div class="contactus-container">
          <h1 class="title">Any Questions?</h1>
          <div class="container">
            <div class="contactus-form">
              <form id="contact-form">
                <div class="form-group">
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Your name"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="number"
                    name="phoneno"
                    id="phoneno"
                    placeholder="Your telephone number"
                  />
                </div>
                <div class="form-group">
                  <textarea
                    name="question"
                    id="question"
                    placeholder="Your Question"
                  ></textarea>
                </div>
                <button type="submit" class="contactus-submit-btn">Send</button>
              </form>
            </div>
            <div class="contactus-text">
              Send us a message and we will get back to you in no time!!
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
              <img
                src="assets/images/logo.jpg"
                alt="Footer Logo"
                class="footer-logo"
              />
            </div>
          </div>
          <div class="footer-col3 col-sm-12">
            <div class="footer-text">
              Codeweb Coding Academy is an institution that gives 100% practical
              classes to students who pursue a Career in any of our available
              courses. Be job ready with our certified ICT Training. For more
              enquiries: info@codeweb.org.ng
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
      <div class="footer-copyright">&copy; Copyright Codeweb <span id="date-el"></span></div>
    </footer>
    <!-- FONT AWESOME JIT SCRIPT-->
    <script
      src="https://kit.fontawesome.com/3ae896f9ec.js"
      crossorigin="anonymous"
    ></script>
    <!-- JQUERY SCRIPT -->
    <script src="assets/js/jquery/jquery-3.6.min.js"></script>
    <!-- JQUERY MIGRATE SCRIPT (FOR OLDER JQUERY PACKAGES SUPPORT)-->
    <script src="assets/js/jquery/jquery-migrate-1.4.1.min.js"></script>
    <!-- SLICK JS -->
    <script src="assets/js/slick/slick.js"></script>
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JUST VALIDATE LIBRARY -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script>
      $(function () {
        const burgerMenu = $(".burger-menu");
        const mobileNav = $(".mobile-menu");
        const dateEl = $("#date-el");
        const scrollUpBtnCnt = $(".scrollup-btn-container");

        // Outputing the year 
        dateEl.html(`${new Date().getFullYear()}.`);

        $(".slider").slick({
          dots: true,
          infinite: true,
          speed: 500,
          fade: true,
          cssEase: "linear",
          autoplay: true,
          autoplaySpeed: 3000,
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
            $([document.documentElement, document.body]).animate(
              {
                scrollTop: $(location).offset().top,
              },
              duration
            );
          });
        };

        smoothScroll(".collaborate-btn-container button", "#services", 3000);



        // CONTACT FORM SUBMISSION SCRIPT
        const validation = new JustValidate("#contact-form", {
          errorFieldCssClass: "is-invalid",
        });

        validation
          .addField("#name", [
            {
              rule: "required",
              errorMessage: "Please provide a name",
            },
            {
              rule: "minLength",
              value: 3,
            },
            {
              rule: "maxLength",
              value: 30,
            },
          ])
          .addField("#phoneno", [
            {
              rule: "required",
              errorMessage: "Please enter your phone number",
            },
          ])
          .addField("#question", [
            {
              rule: "required",
              errorMessage: "Field is required",
            },
          ])
          .onSuccess((event) => {
            const contactForm = document.getElementById("contact-form");
            const contactUsBtn = $("contatcus-submit-btn");
            const formInputs = $(".form-group input");
            const formTextarea = $(".form-group textarea");

            const formData = new FormData(contactForm);

            formData.append("submit", true);

            $.ajax({
              url: "link-here",
              type: "post",
              data: formData,
              processData: false,
              contentType: false,
              beforeSend: function () {
                contactUsBtn.parent().addClass("spin");
                contactUsBtn.html(`<i class="fa fa-spinner"></i>`);
              },
              success: function (response) {
                response = JSON.parse(response);
                contactUsBtn.parent().removeClass("spin");
                contactUsBtn.html("Send");

                if (response.success === 1) {
                  // ALERT USER UPON SUCCESSFUL FORM SUBMISSION
                  Swal.fire({
                    icon: "success",
                    title: "Thank you for contacting us",
                    text: "We've recieved your message and we will get back to you in no time.",
                  });

                  // Clear form fields
                  formInputs.each(function(){
                    $(this).val("");
                  });

                  formTextarea.val("");
                  
                } else {
                  // ALERT THE USER UPON FAILED SUBMISSION
                  Swal.fire({
                    icon: "error",
                    title: "Error submiting form",
                    text: "Please review your information and try again",
                  });
                }
              },
            });
          });
      });
    </script>
  </body>
</html>
