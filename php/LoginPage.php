<?php
session_start();
?>
<html lang="en">
<!--https://startbootstrap.com/theme/grayscale-->
<!--Took the theme from here-->
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
                <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="RegisterAccount.php">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Just code here like normal Ill fix your form styling and whatnot after-->
<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <!--<i class="far fa-paper-plane fa-2x mb-2 text-white"></i>-->
                <h2 class="text-white mb-5">Driver Log-in</h2>
                <form method="post" name="loginForm" id="loginForm"
                      action="Login.php"
                      class="form-signup">
                    <!-- Email address input-->
                    <div class="row input-group-newsletter">
                        <div class="col"><input class="form-control" type="email" id="email" name="email" maxlength="50"
                                                required placeholder="Enter email address..."
                                                aria-label="Enter email address..."/></div>
                    </div>
                    <br>
                    <!--password-->
                    <div class="row input-group-newsletter">
                        <div class="col">
                            <input class="form-control" type="password" id="password" name="password" maxlength="100"
                                   placeholder="Enter password..."
                                   aria-label="Enter password..."
                                   required/>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary" id="submitButton" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
<footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">Totally Legit Copyright &copy; Kaval & Dylan 2021</div><div class="container px-4 px-lg-5">This entire thing is an elaborate inside joke. Kaval can't give directions, and Dylan can't follow them.</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
</html>