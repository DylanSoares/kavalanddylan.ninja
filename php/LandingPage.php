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
                <li class="nav-item"><a class="nav-link" href="#masthead">Track Registration</a></li>
                <li class="nav-item"><a class="nav-link" href="#tracks">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Profile
                        <img class="rounded-circle" src="<?php echo "../uploaddir/".$_SESSION['id']."/avatar.png"; ?>" width="30" height="30" alt="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="EditProfile.php">Edit Profile</a>
                        <a class="dropdown-item" href="Logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header id="masthead" class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Course Notes</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Welcome to Rally Co!<br><br>Select a course below to get
                    randomly generated course notes.</h2>
                <a class="btn btn-primary mb-2" href="RegisteredDrivers.php">Track Registrations</a>
                <a class="btn btn-primary mb-2" href="#tracks">Courses</a>
            </div>
        </div>
    </div>
</header>
<!-- Projects-->
<section class="projects-section bg-gradient2" id="tracks">
    <div class="px-4 px-lg-5 text-center mb-4 bg-dark">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <h1 class="text-white mb-4 mt-4">Courses</h1>
            </div>
        </div>
    </div>
    <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
        <a class="course" href="CostcoCup.php">
            <div class="row gx-0 mb-4 mb-lg-4 align-items-center">
                <div class="col-xl-8 col-lg-7 orange-border"><img class="img-fluid mb-lg-0"
                                                                  src="../assets/img/Costco_Cup_DARK_COLOR.jpg"
                                                                  alt="..."/></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text bg-mid text-center text-lg-left">
                        <br>
                        <h4 class="text-white">Costco Cup</h4>
                        <p class="text-white-50 mb-0">Costco Cup is a prestigious rally event attended by many. Though
                            some say the chaos doesn't end even after you arrive.</p>
                        <br>
                    </div>
                </div>
            </div>
        </a>
        <!-- Project One Row-->
        <a class="course" href="KFCSprint.php">
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6 orange-border"><img class="img-fluid" src="../assets/img/KFC_Sprint_DARK_COLOR.jpg"
                                                         alt="..."/></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-mid text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">KFC Sprint</h4>
                                <p class="text-white-50 mb-0">The KFC Sprint is a college student's main event, often
                                    done with limited time. A true showcase in parking lot maneuvering.</p>
                                <hr class="d-none d-lg-block mb-0 me-0"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <!-- Project Two Row-->
        <a class="course" href="OrchardParkRun.php">
            <div class="row gx-0 pb-5 mt-4 justify-content-center">
                <div class="col-lg-6 orange-border"><img class="img-fluid"
                                                         src="../assets/img/Orchard_Park_Run_DARK_COLOR.jpg" alt="..."/>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-mid text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Orchard Park Run</h4>
                                <p class="mb-0 text-white-50">The Orchard Park Run is an intermediate stage. Featuring
                                    an increase in difficulty over the KFC Sprint, many new drivers find the highway
                                    challenging.</p>
                                <hr class="d-none d-lg-block mb-0 me-0"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black" id="contact">
    <div class="px-4 px-lg-5 text-center mb-4 bg-dark">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <h1 class="text-white mb-4 mt-4">Contact</h1>
            </div>
        </div>
    </div>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <iframe src="https://discord.com/widget?id=231104205509754880&theme=light"
                                height="500" allowtransparency="true" frameborder="0"
                                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4 mx-auto"/>
                        <div class="small text-black-50"><a href="#!">kavalanddylan@ninja.com</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4 mx-auto"/>
                        <div class="small text-black-50">+1 (250) 503-1313</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" target="_blank" href="https://github.com/DylanSoares/kavalanddylan.ninja/blob/main/README.md"><i class="fab fa-github"></i></a>
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


