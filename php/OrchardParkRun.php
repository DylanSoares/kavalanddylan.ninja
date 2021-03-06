<?php
session_start();

if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
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
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/ScrollDown.js"></script>
    <script id="GenerateAgain.js" src="../js/GenerateAgain.js"></script>
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
<header id="welcome" class="masthead" style="background-image: url('../assets/img/Orchard_Park_Run_DARK.jpg')">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Orchard Park Run</h1>
            </div>
        </div>
    </div>
</header>
<section class="about-section py-4 text-center" id="about">
    <div>
        <a id="generate" class="btn btn-primary"
           onclick="$.getScript('../js/GenerateAgain.js', function() {onClick();});">Generate Again</a>
        <a class="btn btn-primary" href="LandingPage.php#tracks">Select Track</a>
    </div>
    <!--this display flex and the columns resizing give the anchor in the .js file a run for its money-->
    <!-- its why it shakes up and down a little bit on new generation, making the columns all fixed size would fix this-->
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th>Turn No.</th>
                    <th>Turn Direction</th>
                    <th>Note</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $track = "Orchard_Park_Run";
                include('TableGenerator.php');
                echo GenerateTable($track, $_SESSION['id']);
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
<footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">Totally Legit Copyright &copy; Kaval & Dylan 2021</div>
    <div class="container px-4 px-lg-5">This entire thing is an elaborate inside joke. Kaval can't give directions, and Dylan can't follow them.</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
</html>
