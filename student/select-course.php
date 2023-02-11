<?php 
    require(__DIR__.'/auth-library/resources.php');
    // Auth::User();
    $url = strval($url);

    $user_id = $_SESSION['user_id'];

    $sql_get_user_details = $db->query("SELECT * FROM users WHERE user_id={$user_id}");

    if($sql_get_user_details->num_rows){
        $user_details = $sql_get_user_details->fetch_assoc();
    }else{
        header("location: ./");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon Icon -->
    <link rel="icon" href="../assets/images/logo.jpg">
    <!-- Bootstrap 5 stylesheet-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <!-- Custom Fonts (KyivType Sans and Inter) -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <!-- initial config css file -->
    <link rel="stylesheet" href="../assets/css/base.css">
    <!-- Codeweb Form -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <!-- Codeweb Preloader  -->
    <link rel="stylesheet" href="../assets/css/student/preloader.css">
    <!-- CUSTOM TOAST CSS -->
    <link rel="stylesheet" href="../assets/css/custom-toast.css">
    <!-- ENROLL STYLESHEET  -->
    <link rel="stylesheet" href="../assets/css/form.css" type="text/css">
    <!-- STUDENT HEADER STYLESHEET -->
    <link rel="stylesheet" href="../assets/css/student/sections/header.css" type="text/css">
    <!-- FOOTER STYLESHEET -->
    <link rel="stylesheet" href="../assets/css/sections/footer.css" type="text/css">
    <!-- HOME STYLESHEET -->
    <link rel="stylesheet" href="../assets/css/home.css" type="text/css">
    <!-- make payment css -->
    <link rel="stylesheet" href="../assets/css/student/select-course.css" type="text/css">
    <!-- MEDIA QUERIES -->
    <link rel="stylesheet" href="../assets/css/media-queries/main-mediaquery.css">
</head>

<body>
    <div class="preloader-wrapper">
        <div class="loader">
            C
        </div>
    </div>
    <header class="make-payment-header">
        <div class="person-container">
            <img src="images/1674998447.png" alt="profile avatar">
            Folorunsho
        </div>
        
        <div class="progress-container">
            <div class="progress progress-1">
                <div class="progress-circle active">
                    1
                </div>
                <span class="progress-text">Buy Application Form</span>
            </div>
            <div class="progress-line progress-line-1">
                <div class="progress-thumb active"></div>
            </div>
            <div class="progress progress-2">
                <div class="progress-circle active">
                    2
                </div>
                <span class="progress-text">Fill application form</span>
            </div>
            <div class="progress-line progress-line-2">
                <div class="progress-thumb active"></div>
            </div>
            <div class="progress progress-2">
                <div class="progress-circle active">
                    3
                </div>
                <span class="progress-text">Select a course</span>
            </div>
        </div>

        <div class="status-container">
            Status: Applicant
        </div>
    </header>
    <main>
        <section class="select-course-section">
            <div class="select-course-container">

                <h1 class="main-title">Select a course</h1>
                <p class="form-notice">Pick a course and set a payment plan</p>

                <form id="select-course-form">
                    <h2 class="form-title">Pick a course</h2>

                    <div class="form-groupings courses">
                        <div class="form-group-container">
                            <input type="radio" id="course-1" name="selected-course" value="1" class="radio-input">
                            <label for="course-1" class="course-label">
                                <div class="card">
                                    <div class="title-container">
                                        <p>Web #1</p>
                                        <span class="course-price">₦120k</span>
                                    </div>
                                    <div class="more-info-container">
                                        <h3 class="course-title">Web development using the LAMP stack (PHP)</h3>
                                        <p class="course-description">
                                            The LAMP stack class is designed for those who are interested in learning about the foundation of web development. The acronym LAMP stands for Linux, Apache, MySQL, and PHP and it refers to the software stack used to power dynamic websites. In this course, you will learn the basics of each component of the LAMP stack and how they work together to create dynamic web pages. The course will cover topics such as installing and configuring Linux, Apache, and PHP, as well as managing databases with MySQL. You will also learn how to design, develop and deploy simple dynamic web pages. By the end of the course, you will have a solid understanding of the LAMP stack and its applications in web development.
                                        </p>
                                        <p class="course-duration">Duration: 4 months</p>
                                    </div>
                                    <div class="radio-btn-container">
                                        <div class="outer-circle course-select">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-group-container">
                            <input type="radio" id="course-2" name="selected-course" value="2" class="radio-input">
                            <label for="course-2" class="course-label">
                                <div class="card">
                                    <div class="title-container">
                                        <p>Web #2</p>
                                        <span class="course-price">₦150k</span>
                                    </div>
                                    <div class="more-info-container">
                                        <h3 class="course-title">Web development using the .NET framework</h3>
                                        <p class="course-description">
                                            This class provides a comprehensive introduction to the .NET framework, including its architecture, components, and programming concepts. Students will learn how to develop, deploy, and run applications using .NET technologies such as C#, ASP.NET, and Windows Forms. Topics covered include: .NET architecture, Common Language Runtime (CLR), .NET class libraries, C# language basics, ASP.NET Web Forms, and Windows Forms development.
                                            By the end of the course, students will have a solid understanding of the .NET framework and be able to build applications for Windows and the web.
                                        </p>
                                        <p class="course-duration">Duration: 6 months</p>
                                    </div>
                                    <div class="radio-btn-container">
                                        <div class="outer-circle course-select">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="form-group-container">
                            <input type="radio" id="course-3" name="selected-course" value="3" class="radio-input">
                            <label for="course-3" class="course-label">
                                <div class="card">
                                    <div class="title-container">
                                        <p>Mobile #1</p>
                                        <span class="course-price">₦250k</span>
                                    </div>
                                    <div class="more-info-container">
                                        <h3 class="course-title">Mobile development with flutter</h2>
                                        <p class="course-description">
                                            Flutter is a popular open-source mobile application development framework created by Google. This class will introduce students to the basics of developing mobile apps using the Flutter framework.

                                            Starting with a brief overview of the framework, students will then learn how to set up their development environment and create their first Flutter app. Throughout the class, students will be exposed to the Dart programming language and will learn how to create UI elements, handle user inputs, and integrate data sources into their app.

                                            By the end of the class, students will have the knowledge and skills to develop a basic mobile app using Flutter, and will have a solid foundation for further development. Whether you're a beginner or have some programming experience, this class will provide a comprehensive introduction to Flutter and mobile app development.
                                        </p>
                                        <p class="course-duration">Duration: 4 months</p>
                                    </div>
                                    <div class="radio-btn-container">
                                        <div class="outer-circle course-select">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="form-group-container">
                            <input type="radio" id="course-4" name="selected-course" value="4" class="radio-input">
                            <label for="course-4" class="course-label">
                                <div class="card">
                                    <div class="title-container">
                                        <p>Mobile #2</p>
                                        <span class="course-price">₦250k</span>
                                    </div>
                                    <div class="more-info-container">
                                        <h3 class="course-title">Mobile development with Xamarin</h3>
                                        <p class="course-description">
                                            In this class, students will learn the basics of Xamarin, a cross-platform mobile app development tool. Students will start by learning how to create a new Xamarin project and understand the components of a Xamarin app. Next, students will learn how to design and build user interfaces, as well as how to add and manage data. Finally, students will learn how to publish their app to the app stores.

                                            Throughout the course, students will work on hands-on projects to apply their newfound skills and develop their own Xamarin apps. By the end of the course, students will have a solid understanding of Xamarin and the skills necessary to create their own mobile apps.
                                        </p>
                                        <p class="course-duration">Duration: 6 months</p>
                                    </div>
                                    <div class="radio-btn-container">
                                        <div class="outer-circle course-select">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="form-group-container">
                            <input type="radio" id="course-5" name="selected-course" value="5" class="radio-input">
                            <label for="course-5" class="course-label">
                                <div class="card">
                                    <div class="title-container">
                                        <p>Networking</p>
                                        <span class="course-price">₦150k</span>
                                    </div>
                                    <div class="more-info-container">
                                        <h3 class="course-title">CCNA/CCNP Networking course</h3>
                                        <p class="course-description">
                                            The CCNA/CCNP Network class is an introductory course designed for students who are looking to start their journey in the field of networking. This class covers the fundamentals of computer networking and prepares students for the CCNA and CCNP certification exams. Students will learn about the basics of networking protocols, such as TCP/IP, and will be introduced to common networking devices such as routers and switches. Additionally, students will learn about network security, wireless networking, and network management. This course is hands-on, with students working on real-world scenarios and lab exercises to reinforce the concepts taught in class. Whether you are looking to enter the world of networking or are seeking to expand your current knowledge, this CCNA/CCNP Network class is the perfect starting point.
                                        </p>
                                        <p class="course-duration">Duration: 6 months</p>
                                    </div>
                                    <div class="radio-btn-container">
                                        <div class="outer-circle course-select">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div>

                    <h2 class="form-title">Set a payment plan</h2>

                    <div class="form-groupings payment-plans">

                        <div class="form-group-container">
                            <input type="radio" name="payment-plan" id="payment-plan-1" value="1">
                            <label for="payment-plan-1" class="payment-label">
                                <div class="payment-card">
                                    <div class="image-container">
                                        <img src="../assets/images/one-time-purchase-icon.png" alt="Icon">
                                    </div>
                                    <div class="payment-text-container">
                                        <h3>Full payment</h3>
                                        <p>Make a full, one time payment.<p>
                                    </div>
                                    <div class="radio-container">
                                        <div class="outer-circle">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="form-group-container">
                            <input type="radio" name="payment-plan" id="payment-plan-2" value="2">
                            <label for="payment-plan-2" class="payment-label">
                                <div class="payment-card">
                                    <div class="image-container">
                                        <img src="../assets/images/payment-plan-icon.png" alt="Icon">
                                    </div>
                                    <div class="payment-text-container">
                                        <h3>Monthly Payment</h3>
                                        <p>Pay fees monthly.<p>
                                    </div>
                                    <div class="radio-container">
                                        <div class="outer-circle">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div>

                    <div class="enroll-form-container">
                        <button role="button" type="button">Save and continue</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col3 col-sm-12">
                    <div class="footer-logo-container">
                        <img src="../assets/images/logo.jpg" alt="Footer Logo" class="footer-logo">
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
            &copy; Copyright Codeweb <?php echo(date("Y"))?>.
        </div>
    </footer>
      <!-- FONT AWESOME JIT SCRIPT-->
      <script src="https://kit.fontawesome.com/3ae896f9ec.js" crossorigin="anonymous"></script>
    <!-- JQUERY SCRIPT -->
    <script src="../assets/js/jquery/jquery-3.6.min.js"></script>
    <!-- JQUERY MIGRATE SCRIPT (FOR OLDER JQUERY PACKAGES SUPPORT)-->
    <script src="../assets/js/jquery/jquery-migrate-1.4.1.min.js"></script>
    <!-- TOASTER PLUGIN -->
    <!-- <script src="../auth-library/vendor/dist/sweetalert2.all.min.js"></script> -->
    <!-- CUSTOM TOAST -->
    <script src="../assets/js/custom-toast/custom-toast.js"></script>
    <script>
        $(".enroll-form-container button").on("click", function () {
            const form = document.getElementById("select-course-form");
            
            const formData = new FormData(form);

            for([key, value] of formData.entries()){
                console.log(`${key}: ${value}`);
            }



            if(formData.get("selected-course") === null && formData.get("payment-plan") === null){
                ftoast("error", "Please select a course and a payment option", 4000);
            }else if(formData.get("selected-course") === null){
                ftoast("error", "Please select a course", 4000);
            }else if(formData.get("payment-plan") === null){
                ftoast("error", "Please choose a payment plan");
            }else{
                sendData({
                    paymentPlan: formData.get("payment-plan"),
                    selectedCourse: formData.get("selected-course"),
                    submit: true
                })
            }
        });

        function sendData(data){
            const formData = JSON.stringify(data);
            
            //SENDING FORM DATA TO THE SERVER
            $.ajax({
                type: "post",
                url: 'controllers/generate-course-payment-details.php',
                data: formData,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                dataType: 'json',
                beforeSend: function () {
                    $(".enroll-form-container button").html("Processing...");
                    $(".enroll-form-container button").attr("disabled", true);
                },
                success: function (response) {
                setTimeout(() => {
                        if (response.success === 1) {
                            // REDIRECT USER TO THE VERIFICATION PAGE
                            window.location = "authentication/send-code?a=send";

                        } else {
                            $(".enroll-form-container button").attr("disabled", false);
                            $(".enroll-form-container button").html("Save and continue");

                            if(response.error_title === "fatal"){
                                // REFRESH CURRENT PAGE
                                location.reload();
                            }else{
                                // ALERT USER
                               ftoast("error", response.error_message, 4000);
                            }
                        }
                    }, 1500);
                },
            });
        };

        // REMOVE PRELOADER
        setTimeout(() => {
            $(".preloader-wrapper").addClass("loaded");
            <?php 
                if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] == "https://localhost/codeweb/student/"){
                    echo 'ftoast("success", "Welcome back ' . $user_details['username'] . '", 4000);';
                } 
            ?>
        }, 3000);
    </script>
</body>

</html>
