<?php 
// require(__DIR__.'/auth-library/resources.php');
// Auth::Route("student/");
// $url = strval($url);
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
    <!-- Enroll stylesheet -->
    <link rel="stylesheet" href="../assets/css/sign-up.css">
    <!-- MEDIA QUERIES -->
    <link rel="stylesheet" href="../assets/css/media-queries/main-mediaquery.css">
</head>

<body>
    <section class="registeration-section">
        <header>
            Not a member yet? <a href="./sign-up">Create an account</a>
        </header>
        <div class="registeration-wrapper login">
            <div class="registeration-container">
                <h1 class="title">Sign in</h1>

                <div class="registeration-form-container">
                    <form action="controllers/sign-up-process.php" method="post" id="registeration-form">
                        
                    <div class="form-groupings">
                        <div class="form-group-container w-100">
                            <div class="form-group animate">
                                <input type="text" name="username" id="username" class="form-input"  placeholder=" " required>
                                <label for="username">Username</label>
                            </div>
                        </div>

                        <div class="form-group-container w-100">
                            <div class="form-group animate">
                                <input type="password" name="pwd" id="pwd" class="form-input"  placeholder=" " required>
                                <label for="pwd">Password</label>
                            </div>
                        </div>
                    </div>

                        <div class="forgot-password-container">
                            <a href="#">Forgot password?</a>
                        </div>

                        <div class="register-container">
                            <button type="submit" name="submit">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="hero-section-container">
        <div class="text-wrapper">
            <img src="../assets/images/c-pole.png" />
            <div class="text-container">
                <h1> Welcome Back!! </h1>
                <p>Please put your login credentials to <br> start using the app</p>
            </div>
        </div>
    </section>
    <aside class="copy-sign">&copy; Codeweb 2023</aside>
    <!-- FONT AWESOME JIT SCRIPT-->
    <script src="https://kit.fontawesome.com/3ae896f9ec.js" crossorigin="anonymous"></script>
    <!-- JQUERY SCRIPT -->
    <script src="../assets/js/jquery/jquery-3.6.min.js"></script>
    <!-- JQUERY MIGRATE SCRIPT (FOR OLDER JQUERY PACKAGES SUPPORT)-->
    <script src="../assets/js/jquery/jquery-migrate-1.4.1.min.js"></script>
    <!-- TOASTER PLUGIN -->
    <script src="../auth-library/vendor/dist/sweetalert2.all.min.js"></script>
    <!-- JUST VALIDATE LIBRARY -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script>
        //FORM VALIDATION WITH VALIDATE.JS

        const validation = new JustValidate('#registeration-form', {
            errorFieldCssClass: 'is-invalid',
        });

        validation
        // .addField('#fname', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        //     {
        //     rule: 'minLength',
        //     value: 3,
        //     },
        //     {
        //     rule: 'maxLength',
        //     value: 30,
        //     },
        // ])
        // .addField('#lname', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        //     {
        //     rule: 'minLength',
        //     value: 3,
        //     },
        //     {
        //     rule: 'maxLength',
        //     value: 30,
        //     },
        // ])
        .addField('#username', [
            {
            rule: 'required',
            errorMessage: 'Field is required',
            },
        ])
        // .addField('#pnum', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        //     {
        //     rule: 'minLength',
        //     value: 11,
        //     },
        //     {
        //     rule: 'maxLength',
        //     value: 11,
        //     },
        // ])
        .addField('#pwd', [
            {
                rule: 'minLength',
                value: 6,
            },
            {
                rule: 'required',
                errorMessage: "Please provide a password"
            }
        ])
        // .addField('#cpwd', [
        //     {
        //         rule: 'minLength',
        //         value: 6,
        //     },
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        //     {
        //         validator: (value, fields) => {
        //         if (fields['#pwd'] && fields['#pwd'].elem) {
        //             const repeatPasswordValue = fields['#pwd'].elem.value;

        //             return value === repeatPasswordValue;
        //         }

        //         return true;
        //         },
        //         errorMessage: 'Passwords should be the same',
        //     }
        // ])
        // .addField('#agree_to_terms', [
        //     {
        //         rule: 'required',
        //         errorMessage: 'Please agree to the terms'
        //     }
        // ])
        .onSuccess(() => {
            const form = document.getElementById('registeration-form');

            // GATHERING FORM DATA
            const formData = new FormData(form);
            formData.append("submit", true);
            
            //SENDING FORM DATA TO THE SERVER
            $.ajax({
                type: "post",
                url: 'controllers/sign-in-process.php',
                data: formData,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                dataType: 'json',
                beforeSend: function () {
                    $(".register-container button").html("Registering...");
                    $(".register-container button").attr("disabled", true);
                },
                success: function (response) {
                setTimeout(() => {
                        if (response.success === 1) {
                            // REDIRECT USER TO THE VERIFICATION PAGE
                            // window.location = "authentication/send-code?a=send";
                            if(response.redirect=='make_payment'){
                                window.location.href='make-payment.php'
                            }
                            if(response.redirect=='application_form'){
                                window.location.href='enroll.php'
                            }
                            if(response.redirect=='select_course'){
                                window.location.href='select_course.php'
                            }
                            if(response.redirect=='student_dashboard'){
                                window.location.href='student_dashboard.php'
                            }

                        } else {
                            $(".register-container button").setAttr("disabled", false);
                            $(".register-container button").html("Register");

                            if(response.error_title === "fatal"){
                                // REFRESH CURRENT PAGE
                                location.reload();
                            }else{
                                // ALERT USER
                                Swal.fire({
                                    title: response.error_title,
                                    icon: "error",
                                    text: response.error_message,
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                });
                            }
                        }
                    }, 1500);
                },
            });
        });
    </script>
</body>

</html>
