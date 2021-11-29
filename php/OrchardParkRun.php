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
                <li class="nav-item"><a class="nav-link" href="../index.html">Log Out</a></li>
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
<section class="about-section text-center" id="about">
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
                $i = 0;
                $j = 0;
                $_leftArr[0] = "";
                $_rightArr[0] = "";
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");

                $sql = "SELECT * FROM Orchard_Park_Run";
                $result = $mysqli->query($sql);

                $leftTurns = "SELECT turnQuote FROM LeftTurns";
                $leftResult = $mysqli->query($leftTurns);
                while ($row = $leftResult->fetch_assoc()) {
                    $_leftArr[$i] = $row["turnQuote"];
                    $i++;
                }

                $rightTurns = "SELECT turnQuote FROM RightTurns";
                $rightResult = $mysqli->query($rightTurns);
                while ($row = $rightResult->fetch_assoc()) {
                    $_rightArr[$j] = $row["turnQuote"];
                    $j++;
                }

                //echo table rows for each row returned
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Turn_ID"] ."</td><td>" . $row["Turn_Dir"] . "</td><td>";
                    switch ($row["Turn_Dir"]) {
                        case "left":
                            $leftQuote = mt_rand(0, sizeof($_leftArr)-1);
                            echo $_leftArr[$leftQuote];
                            break;
                        case "right":
                            $rightQuote = mt_rand(0, sizeof($_rightArr)-1);
                            echo $_rightArr[$rightQuote];
                            break;
                    }
                    echo "</td></tr>";
                }
                ?>
                </tbody>
            </table>
            <a id="generate" class="btn btn-primary" onclick="$.getScript('../js/GenerateAgain.js', function() {onClick();});">Generate Again</a>
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
