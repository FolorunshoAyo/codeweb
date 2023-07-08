<?php
require(dirname(__DIR__) . '/auth-library/resources.php');
Auth::User();
$url = strval($url);


$user_id = $_SESSION['user_id'];

$sql_get_user_details = $db->query("SELECT * FROM users WHERE user_id={$user_id}");

if ($sql_get_user_details->num_rows) {
  $user_details = $sql_get_user_details->fetch_assoc();
} else {
  header("location: ./");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Custom Fonts (Inter) -->
  <link rel="stylesheet" href="../../assets/css/fonts.css" />
  <!-- BASE CSS -->
  <link rel="stylesheet" href="../../assets/css/base.css" />
  <!-- ADMIN DASHBOARD MENU CSS -->
  <link rel="stylesheet" href="../../assets/css/dashboard/student-dash-menu.css" />
  <!-- ADMIN DASHBOARD STYLESHEET -->
  <link rel="stylesheet" href="../../assets/css/dashboard/student-dash/academic-details.css" />
  <!-- DASHHBOARD MEDIA QUERIES -->
  <link rel="stylesheet" href="../../assets/css/media-queries/student-dash-mediaquery.css" />
  <title>Academic Details - Codeweb Student Dashboard</title>
</head>

<body>
  <div class="dash-wrapper">
    <?php
    include("includes/student-dash-sidebar.php");
    ?>
    <section class="page-wrapper">
      <header class="dash-header">
        <h1 class="welcome-message">Academic details
        </h1>
        <div class="profile-container">
          <div class="first-name-initial">
            <?= substr($user_details['username'], 0, 1) ?>
          </div>
          <div class="profile-details">
            <h2><?= $user_details['last_name'] . " " . $user_details['first_name'] ?></h2>
            <p>Student</p>
          </div>
          <div class="logout-container">
            <a href="../logout">
              <i class="fa fa-sign-out"></i>
            </a>
          </div>
        </div>
      </header>
      <main>
        <div class="main-wrapper">
          <?php
          $sql_get_active_course = $db->query("SELECT course_id FROM course_lookup WHERE user_id = {$user_id} AND completed = 0");

          $active_course_id = $sql_get_active_course->fetch_assoc()['course_id'];

          $sql_get_active_course_details = $db->query("SELECT courses.*, staffs.first_name as first_name, staffs.last_name as last_name FROM courses INNER JOIN staffs ON courses.staff_id = staffs.staff_id WHERE course_id = {$active_course_id}");

          $course_details = $sql_get_active_course_details->fetch_assoc();
          ?>
          <div class="course-preview-section" style="background-image: url(../../assets/images/<?= $course_details['course_logo'] ?>)">
            <div class="course-preview-overlay"></div>
          </div>
          <div class="description-wrapper">
            <h2 class="course-title"><?= $course_details['name'] ?></h2>

            <h3>Overview</h3>
            <div class="info-wrapper">
              <?= $course_details['description'] ?>
            </div>
            <h3>Course Content</h3>
            <div class="info-wrapper">
              Coming soon
            </div>
            <h3>Instructor</h3>
            <div class="info-wrapper">
              <?= $course_details['last_name'] . " " . $course_details['first_name']  ?>
            </div>
          </div>
        </div>
      </main>
    </section>
  </div>

  <!-- FONT AWESOME JIT SCRIPT-->
  <script src="https://kit.fontawesome.com/3ae896f9ec.js" crossorigin="anonymous"></script>
  <!-- JQUERY SCRIPT -->
  <script src="../../assets/js/jquery/jquery-3.6.min.js"></script>
  <!-- JQUERY MIGRATE SCRIPT (FOR OLDER JQUERY PACKAGES SUPPORT)-->
  <script src="../../assets/js/jquery/jquery-migrate-1.4.1.min.js"></script>
  <!-- METIS MENU JS -->
  <script src="../../assets/js/metismenujs/metismenujs.js"></script>
  <!-- DASHBOARD SCRIPT -->
  <script src="../../assets/js/dash.js"></script>
  <script>
    //PROGRESS LOADERS FOR TOP SELLING CATEGORIES
    // const progressThumbs = $(".progress-thumb");

    // progressThumbs.each(function () {
    //   const dataPercent = $(this).attr("data-percent");

    //   $(this).css("width", dataPercent);
    // });

    // TAB FUNCTIONALITY
    // $(".tab").each(function(){
    //   $(this).on("click", function(){
    //     const selectedTabNo = $(this).attr("data-tab");

    //     $(".tab").each(function(){
    //       $(this).removeClass("active");
    //     })

    //     $(this).addClass("active");

    //     $(".tab-content").each(function(){
    //       $(this).removeClass("active");
    //     });

    //     $(`.tab-${selectedTabNo}`).addClass("active")
    //   });
    // });
  </script>
</body>

</html>