d<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
//connect to server and select database
$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");

//For more info about mysqli functions, go to the site below:
//http://www.w3schools.com/php/php_ref_mysqli.asp

$firstname = $_POST["firstname"];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = strtolower($_POST["email"]);
if (isset($_POST['car'])) {
    $car = $_POST['car'];
    switch ($car) {
        case "subaru_impreza_wrc":
            $carSelected = "Subaru Impreza WRC";
            break;
        case "subaru_s8_wrc":
            $carSelected = "Subaru S8 WRC";
            break;
        case "subaru_wrx_sti":
            $carSelected = "Subaru WRX STI";
            break;
        case "mitsubishi_lancer_wrc":
            $carSelected = "Mitsubishi Lancer WRC";
            break;
        case "mitsubishi_lancer_evo":
            $carSelected = "Mitsubishi Lancer EVO";
            break;
        case "mitsubishi_xpander_ap4":
            $carSelected = "Mitsubishi XPANDER AP4";
            break;
        case "toyota_yaris_wrc":
            $carSelected = "Toyota Yaris WRC";
            break;
        case "toyota_yaris_rally1":
            $carSelected = "Toyota GR Yaris Rally1";
            break;
        case "ford_fiesta_wrc":
            $carSelected = "Ford Fiesta WRC";
            break;
        case "ford_fiesta_rs_wrc":
            $carSelected = "Ford Fiesta RS WRC";
            break;
        case "ford_puma_rally1":
            $carSelected = "Ford Puma Rally1";
            break;
        case "hyundai_i20_coupe_wrc":
            $carSelected = "Hyundai i20 Coupe WRC";
            break;
        case "hyundai_i20_n_rally1":
            $carSelected = "Hyundai i20 N Rally1";
            break;
        case "citroen_c3_wrc":
            $carSelected = "Citroën C3 WRC";
            break;
        case "citroen_ds3_wrc":
            $carSelected = "Citroën DS3 WRC";
            break;
    }
}

if (isset($_POST['team'])) {
    $team = $_POST['team'];
    switch ($team) {
        case "subaru_motorsports":
            $teamSelected = "Subaru Motorsports";
            break;
        case "mitsubishi_ralliart":
            $teamSelected = "Mitsubishi Ralliart";
            break;
        case "toyota_gazoo_racing":
            $teamSelected = "Toyota Gazoo Racing";
            break;
        case "ford_world_rally_team":
            $teamSelected = "Ford World Rally Team";
            break;
        case "hyundai_motorsport":
            $teamSelected = "THyundai Motorsport";
            break;
        case "citroen_world_rally_team":
            $teamSelected = "Citroën World Rally Team";
            break;
    }
}

$sql = "SELECT email FROM Drivers WHERE email = '" . $email .
    "'";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

if ($firstname != null && mysqli_num_rows($result) >= 1) {

    echo "<script> alert(\"Email already exists\");</script>";
} else if ($firstname != null && mysqli_num_rows($result) == 0) {

    $sql2 = "INSERT INTO Drivers (email, fname, lname, team, car, pword) VALUES (\"{$email}\",\"{$firstname}\",\"{$lastname}\",\"{$teamSelected}\",\"{$carSelected}\",SHA1(\"{$password}\"))";
    $result2 = mysqli_query($mysqli, $sql2) or die(mysqli_error($mysqli));

    echo "<script> alert(\"Account created successfully\");</script>";
    header("Location: ./Login.php");
    exit();
}

?>

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
                <li class="nav-item"><a class="nav-link" href="../index.html"">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./Login.php"">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <!--<i class="far fa-paper-plane fa-2x mb-2 text-white"></i>-->
                <h2 class="text-white mb-5">Driver Registration</h2>
                <form method="post" name="contactForm" id="contactForm"
                      action="RegisterAccount.php"
                      class="form-signup">
                    <!-- Email address input-->
                    <div class="row input-group-newsletter">
                        <div class="col"><input class="form-control" type="email" id="email" name="email" maxlength="50"
                                                required placeholder="Enter email address..."
                                                aria-label="Enter email address..."/></div>
                    </div>
                    <br>
                    <!-- First name input-->
                    <div class="row input-group-newsletter">
                        <div class="col"><input class="form-control" type="text" id="firstname" name="firstname"
                                                maxlength="25" required placeholder="Enter first name..."
                                                aria-label="Enter first name..." pattern="^[a-zA-Z ,.'-]+$"/></div>
                    </div>
                    <br>
                    <!-- Last name input-->
                    <div class="row input-group-newsletter">
                        <div class="col">
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                   maxlength="25" required placeholder="Enter last name..."
                                   aria-label="Enter last name..." pattern="^[a-zA-Z ,.'-]+$"/></div>
                    </div>
                    <br>
                    <!-- Team input-->
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
                    <br>
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
    <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
</html>
