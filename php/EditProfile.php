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
                <li class="nav-item"><a class="nav-link" href="./LandingPage.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="Logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Edit Profile -->
<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <!-- <div class="col-md-10 col-lg-8 mx-auto text-center">-->
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                         class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6 class="text-white">Upload a different photo...</h6>
                    <input type="file" class="form-control">
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <h3>Personal info</h3>

                <form class="form-signup" role="form">
                    <div class="row input-group-newsletter">
                        <div class="col">
                            <label class="col-form-label" for="team">Select Team</label>
                            <select class="form-control" name="team" id="team" required>
                                <option value="subaru_motorsports">Subaru Motorsports</option>
                                <option value="mitsubishi_ralliart">Mitsubishi Ralliart</option>
                                <option value="toyota_gazoo_racing">Toyota Gazoo Racing</option>
                                <option value="ford_world_rally_team">Ford World Rally Team</option>
                                <option value="hyundai_motorsport">Hyundai Motorsport</option>
                                <option value="citroen_world_rally_team">Citroën World Rally Team</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <label class="col-form-label" for="car">Select Car</label>
                            <select class="form-control" name="car" id="car" required>
                                <optgroup label="Subaru Cars">
                                    <option value="subaru_s8_wrc">Subaru S8 WRC</option>
                                    <option value="subaru_impreza_wrc">Subaru Impreza WRC</option>
                                    <option value="subaru_wrx_sti">Subaru WRX STI</option>
                                </optgroup>
                                <optgroup label="Mitsubishi Cars">
                                    <option value="mitsubishi_lancer_wrc">Mitsubishi Lancer WRC</option>
                                    <option value="mitsubishi_lancer_evo">Mitsubishi Lancer EVO</option>
                                    <option value="mitsubishi_xpander_ap4">Mitsubishi XPANDER AP4</option>
                                </optgroup>
                                <optgroup label="Toyota Cars">
                                    <option value="toyota_yaris_wrc">Toyota Yaris WRC</option>
                                    <option value="toyota_yaris_rally1">Toyota GR Yaris Rally1</option>
                                </optgroup>
                                <optgroup label="Ford Cars">
                                    <option value="ford_fiesta_wrc">Ford Fiesta WRC</option>
                                    <option value="ford_fiesta_rs_wrc">Ford Fiesta RS WRC</option>
                                    <option value="ford_puma_rally1">Ford Puma Rally1</option>
                                </optgroup>
                                <optgroup label="Hyundai Cars">
                                    <option value="hyundai_i20_coupe_wrc">Hyundai i20 Coupe WRC</option>
                                    <option value="hyundai_i20_n_rally1">Hyundai i20 N Rally1</option>
                                </optgroup>
                                <optgroup label="Citroën Cars">
                                    <option value="citroen_c3_wrc">Citroën C3 WRC</option>
                                    <option value="citroen_ds3_wrc">Citroën DS3 WRC</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
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
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US
                                        &amp;
                                        Canada)
                                    </option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US
                                        &amp;
                                        Canada)
                                    </option>
                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00)
                                        Central Time (US &amp; Canada)
                                    </option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US
                                        &amp;
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
    <div class="container px-4 px-lg-5">This entire thing is an elaborate inside joke. Kaval can't give directions,
        and
        Dylan can't follow them.
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
</body>
</html>

