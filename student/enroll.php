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
    <!-- CODEWEB Form -->
    <link rel="stylesheet" href="../assets/css/form.css">
    <!-- STUDENT HEADER CSS -->
    <link rel="stylesheet" href="../assets/css/student/sections/header.css">
    <!-- FOOTER CSS -->
    <link rel="stylesheet" href="../assets/css/sections/footer.css">
    <!-- HOME STYLESHEET -->
    <link rel="stylesheet" href="../assets/css/home.css" type="text/css">
    <!-- MEDIA QUERIES -->
    <link rel="stylesheet" href="../assets/css/media-queries/main-mediaquery.css">
</head>

<body>
    <header class="make-payment-header">
        <div class="person-container">
            <i class="fa fa-user-circle"></i>
            Damilola
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
                <div class="progress-thumb"></div>
            </div>
            <div class="progress progress-3">
                <div class="progress-circle">
                    3
                </div>
                <span class="progress-text">Select a course</span>
            </div>
        </div>

        <div class="status-container">
            Status: Appliciant
        </div>
    </header>
    <main>
        <section class="form-section">
            <div class="form-container">
                <h1 class="main-title">Application form</h1>

                <p class="form-notice">Fill in your Information</p>

                <div class="form-container">
                    <form id="enroll-form">
                        <h2 class="form-title">Primary Information</h2>

                        <div class="personal-info-container form-groupings">

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <input type="text" name="fname" id="fname" class="form-input" placeholder=" " required>
                                    <label for="fname">First name</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <input type="text" name="lname" id="lname" class="form-input"  placeholder=" " required>
                                    <label for="lname">Last name</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <input type="date" name="dob" id="dob" class="form-input"  placeholder=" " required>
                                    <label for="dob">Date of Birth</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <select name="sex" id="sex" class="form-input" required>
                                        <option value="">Choose sex</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                    <label for="sex">Sex</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <input type="email" name="email" id="email" class="form-input"  placeholder=" " required>
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <input type="number" name="phoneno" id="phoneno" class="form-input"  placeholder=" " required>
                                    <label for="phoneno">Phone number</label>
                                </div>
                            </div>

                        </div>

                        <h2 class="form-title">Residential Information</h2>

                        <div class="address-info-container form-groupings">
                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <input type="text" name="address" id="address" class="form-input"  placeholder=" " required>
                                    <label for="address">Address line (home)</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <input type="text" name="city" id="city" class="form-input"  placeholder=" " required>
                                    <label for="city">City</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <select name="state" id="state" class="form-input"  placeholder=" " required>
                                        <option value="">Select residential state</option>
                                    </select>
                                    <label for="state">State</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <input type="text" name="pcode" id="pcode" class="form-input"  placeholder=" " required>
                                    <label for="pcode">Postal Code</label>
                                </div>
                            </div>

                            <div class="form-group-container">
                                <div class="form-group animate">
                                    <select name="country" id="country" class="form-input"  placeholder=" " required>
                                        <option value="">Select country of residence</option>
                                    </select>
                                    <label for="country">Country</label>
                                </div>
                            </div>
                        </div>

                        <h2 class="form-title">How did you hear about us?</h2>

                        <div class="personal-info-container form-groupings checkboxs">
                            <label id="check-1"><input type="checkbox" id="check-1">Education Agent</label>
                            <label id="check-2"><input type="checkbox" id="check-2">Career/Education fair</label>
                            <label id="check-3"><input type="checkbox" id="check-3">Friends</label>
                            <label id="check-4"><input type="checkbox" id="check-4">Family Member</label>
                            <label id="check-5"><input type="checkbox" id="check-5">Career Adviser</label>
                            <label id="check-6"><input type="checkbox" id="check-6">Billboard</label>
                            <label id="check-7"><input type="checkbox" id="check-7">Google</label>
                            <label id="check-8"><input type="checkbox" id="check-8">Print/Newspaper</label>
                            <label id="check-9"><input type="checkbox" id="check-9">Social Media</label>
                            <label id="check-10"><input type="checkbox" id="check-10">Word of mouth</label>
                            <label id="check-11"><input type="checkbox" id="check-11">Other search engine</label>
                            <label id="check-12"><input type="checkbox" id="check-12">Embassy</label>
                            <label id="check-13"><input type="checkbox" id="check-13">Others</label>
                        </div>

                        <!-- <div class="agreement-container">
                            <label for="agree"><input type="checkbox" id="agree_to_terms">Agree to terms and conditions</label>
                        </div> -->

                        <div class="register-container">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
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
    <script src="../auth-library/vendor/dist/sweetalert2.all.min.js"></script>
    <!-- JUST VALIDATE LIBRARY -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script>
        //FORM VALIDATION WITH VALIDATE.JS

        const validation = new JustValidate('#registeration-form', {
            errorFieldCssClass: 'is-invalid',
        });

        validation
        .addField('#fname', [
            {
                rule: 'required',
                errorMessage: "Field is required"
            },
            {
                rule: 'minLength',
                value: 3,
            },
            {
                rule: 'maxLength',
                value: 30,
            },
        ])
        .addField('#oname', [
            {
                rule: 'required',
                errorMessage: "Field is required"
            },
            {
                rule: 'minLength',
                value: 3,
            },
            {
                rule: 'maxLength',
                value: 30,
            },
        ])
        .addField('#lname', [
            {
                rule: 'required',
                errorMessage: "Field is required"
            },
            {
            rule: 'minLength',
            value: 3,
            },
            {
            rule: 'maxLength',
            value: 30,
            },
        ])
        .addField('#email', [
            {
                rule: 'required',
                errorMessage: 'Field is required',
            },
            {
                rule: 'email',
                errorMessage: 'Email is invalid!',
            },
        ])
        .addField('#phoneno', [
            {
                rule: 'required',
                errorMessage: "Field is required"
            },
            {
                rule: 'minLength',
                value: 11,
            },
            {
                rule: 'maxLength',
                value: 11,
            },
        ])
        .addField('#address', [
            {
                rule: 'required',
                errorMessage: "Field is required"
            },
        ])
        // .addField('#school_name', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        // ])
        // .addField('#aletter', [
        //     {
        //         rule: 'minFilesCount',
        //         value: 1
        //     },
        //     {
        //         rule: 'maxFilesCount',
        //         value: 1
        //     },
        //     {
        //         rule: 'files',
        //         value: {
        //         files: {
        //             extensions: ['pdf'],
        //             maxSize: 500000,
        //             minSize: 1000,
        //             types: ['application/pdf'],
        //         },
        //         },
        //     },
        // ])
        // .addField('#dept', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        // ])
        // .addField('#level', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        // ])
        // .addField('#matricno', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        // ])
        // .addField('#school_id', [
        //     {
        //         rule: 'minFilesCount',
        //         value: 1
        //     },
        //     {
        //         rule: 'maxFilesCount',
        //         value: 1
        //     },
        //     {
        //         rule: 'files',
        //         value: {
        //         files: {
        //             extensions: ['pdf'],
        //             maxSize: 500000,
        //             minSize: 1000,
        //             types: ['application/pdf'],
        //         },
        //         }
        //     },
        // ])
        // .addField('#gfullname', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     }
        // ])
        // .addField('#goccupation', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        // ])
        // .addField('#grelationship', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     }
        // ])
        // .addField('#gemail', [
        //     {
        //         rule: 'required',
        //         errorMessage: 'Field is required',
        //     },
        //     {
        //         rule: 'email',
        //         errorMessage: 'Email is invalid!',
        //     },
        // ])
        // .addField('#gphoneno', [
        //     {
        //         rule: 'minLength',
        //         value: 11,
        //     },
        //     {
        //         rule: 'maxLength',
        //         value: 11,
        //     },
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        // ])
        // .addField('#gaddress', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     },
        // ])
        // .addField('#hfullname', [
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     }
        // ])
        // .addField('#hemail', [
        //     {
        //         rule: 'required',
        //         errorMessage: 'Field is required',
        //     },
        //     {
        //         rule: 'email',
        //         errorMessage: 'Email is invalid!',
        //     },
        // ])
        // .addField('#hphoneno', [
        //     {
        //         rule: 'minLength',
        //         value: 11,
        //     },
        //     {
        //         rule: 'maxLength',
        //         value: 11,
        //     },
        //     {
        //         rule: 'required',
        //         errorMessage: "Field is required"
        //     }
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
        .addField('#cpwd', [
            {
                rule: 'minLength',
                value: 6,
            },
            {
                rule: 'required',
                errorMessage: "Field is required"
            },
            {
                validator: (value, fields) => {
                    if (fields['#pwd'] && fields['#pwd'].elem) {
                        const repeatPasswordValue = fields['#pwd'].elem.value;

                        return value === repeatPasswordValue;
                    }

                    return true;
                },
                errorMessage: 'Passwords should be the same',
            }
        ])
        .addField('#agree_to_terms', [
            {
                rule: 'required',
                errorMessage: 'Please agree to the terms'
            }
        ])
        .onSuccess(() => {
            const form = document.getElementById('registeration-form');

            // GATHERING FORM DATA
            const formData = new FormData(form);
            formData.append("submit", true);
            
            //SENDING FORM DATA TO THE SERVER
            $.ajax({
                type: "post",
                url: 'controller/enroll-process.php',
                data: formData,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                dataType: 'json',
                beforeSend: function () {
                    $(".register-container button").html("Enrolling...");
                    $(".register-container button").attr("disabled", true);
                },
                success: function (response) {
                setTimeout(() => {
                        if (response.success === 1) {
                            // REDIRECT USER TO THE VERIFICATION PAGE
                            window.location = "success";

                        } else {
                            $(".register-container button").attr("disabled", false);
                            $(".register-container button").html("Submit");

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
                                // alert(`There was an error processing your form\n
                                // Error title: ${response.error_title}\n 
                                // Error message: ${response.error_message}\n`);
                            }
                        }
                    }, 1500);
                },
            });
        });

        //SCRIPT TO FETCH ALL SCHOOLS ACCROSS ALL STATES IN NIGERIA
        // fetch("schools.json")
        //     .then(data => data.json())
        //     .then(result => {
        //         updateSelect(result);
        //     });

        // function updateSelect(schoolsObj) {
        //     let htmlOutput = "";

        //     htmlOutput += `<option value="">Select school</option>`;

        //     if (schoolsObj.length !== 0) {
        //         schoolsObj.forEach((schoolObj, index) => {
        //             const state = Object.keys(schoolObj)[0];
        //             htmlOutput += `<optgroup label="${state}">`;

        //             for (let schoolID in schoolObj[state]) {
        //                 htmlOutput += `<option>${schoolObj[state][schoolID].toLowerCase()}</option>`;
        //             }

        //             htmlOutput += `</optgroup>`;

        //         });
        //     }

        //     $("#school_name").html(htmlOutput);
        // }
    </script>
</body>

</html>
