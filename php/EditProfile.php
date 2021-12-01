<?php
session_start();

if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('Location: LoginPage.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Kaval & Dylan's Rally Co</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/Stylesheet.css" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">Kaval & Dylan Rally Co</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#masthead">Welcome</a></li>
                <li class="nav-item"><a class="nav-link" href="#tracks">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Edit Profile</a>
                        <a class="dropdown-item" href="Logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header id="masthead" class="about-section">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center"></div>
</header>
<!-- Projects-->
<section class="projects-section bg-gradient2" id="tracks">
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <h1 class="text-primary">Edit Profile</h1>
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                         class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>

                    <input type="file" class="form-control">
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    This is an <strong>.alert</strong>. Use this to show important messages to the user.
                </div>
                <h3>Personal info</h3>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="dey-dey">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="bootdey">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Company:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="janesemail@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Time Zone:</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="user_time_zone" class="form-control">
                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option value="Alaska">(GMT-09:00) Alaska</option>
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp;
                                        Canada)
                                    </option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp;
                                        Canada)
                                    </option>
                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00)
                                        Central Time (US &amp; Canada)
                                    </option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp;
                                        Canada)
                                    </option>
                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">Totally Legit Copyright &copy; Kaval & Dylan 2021</div>
    <div class="container px-4 px-lg-5">This entire thing is an elaborate inside joke. Kaval can't give directions, and
        Dylan can't follow them.
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
</body>
</html>

