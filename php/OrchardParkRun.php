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
                <li class="nav-item"><a class="nav-link" href="../index.html">Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="about-section text-center" id="about">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th>email</th>
                    <th>fname</th>
                    <th>lname</th>
                    <th>team</th>
                </tr>
                </thead>
                <tbody>
                <?php
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");

                $sql = "SELECT * FROM Drivers";
                $result = $mysqli->query($sql);
                //echo table rows for each row returned
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["email"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["team"] . "</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
<footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
</html>
