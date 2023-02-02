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
  <link rel="stylesheet" href="../../assets/css/dashboard/student-dash/index.css" />
  <!-- DASHHBOARD MEDIA QUERIES -->
  <link rel="stylesheet" href="../../assets/css/media-queries/student-dash-mediaquery.css" />
  <title>Student Dashboard</title>
</head>

<body>
  <div class="dash-wrapper">
    <div class="mobile-backdrop"></div>
    <aside class="dash-menu">
      <div class="logo">
        <div class="menu-icon">
          <i class="fa fa-bars"></i>
          <i class="fa fa-times"></i>
        </div>
        <a href="./">
          <span class="logo-symbol">C</span>
          <span class="logo-text"> CODEWEB </span>
        </a>
      </div>
      <div class="menu-list-container">
        <ul class="side-menu" id="side-menu">
          <li title="dashboard" class="nav-item active">
            <a href="./">
              <i class="fa fa-home"></i>
              <span>Dashboard</span>
            </a>
            <span class="nav-pill">&nbsp;</span>
          </li>
          <li title="school info" class="nav-item">
            <a href="javascript:void(0)">
              <i class="fa fa-bank"></i>
              <span>School Info</span>
            </a>
            <span class="nav-pill"></span>
          </li>
          <li title="personal details" class="nav-item">
            <a href="javascript:void(0)">
              <i class="fa fa-user"></i>
              <span>Personal Details</span>
            </a>
            <span class="nav-pill"></span>
          </li>
          <li title="academic details" class="nav-item">
            <a href="javascript:void(0)">
              <i class="fa fa-book"></i>
              <span>Academic Details</span>
            </a>
            <span class="nav-pill"></span>
          </li>
          <li title="course selection" class="nav-item">
            <a href="javascript:void(0)">
              <i class="fa fa-bars"></i>
              <span>Course Selection</span>
            </a>
            <span class="nav-pill"></span>
          </li>
          <li title="finance" class="nav-item">
            <a href="javascript:void(0)">
              <i class="fa fa-money"></i>
              <span>Finance</span>
            </a>
            <span class="nav-pill"></span>
          </li>
          <li title="online exam" class="nav-item">
            <a href="javascript:void(0)">
              <i class="fa fa-certificate"></i>
              <span>Online Exam</span>
            </a>
            <span class="nav-pill"></span>
          </li>
        </ul>
      </div>
    </aside>
    <section class="page-wrapper">
      <header class="dash-header">
        <h1 class="welcome-message">Dashboard
        </h1>
        <div class="profile-container">
          <div class="image-container">
            <img src="../images/1674998447.png" alt="Profile Avatar">
          </div>
          <div class="profile-details">
            <h2>Shodiya Folorunsho</h2>
            <p>Student</p>
          </div>
        </div>
      </header>
      
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