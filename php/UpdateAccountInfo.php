<?php
session_start();
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('Location: LoginPage.php');
    exit();
}

include('DBConnect.php');
$mysqli = connectToDB();

$firstname = $_POST["firstname"];
$lastname = $_POST['lastname'];
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
            $teamSelected = "Hyundai Motorsport";
            break;
        case "citroen_world_rally_team":
            $teamSelected = "Citroën World Rally Team";
            break;
    }
}

$sql = "UPDATE Drivers SET fname = \"" . $firstname . "\", lname = \"" . $lastname . "\", team =\"".$teamSelected . "\", car = \"". $carSelected ."\" WHERE email = \"". $_SESSION['id'] ."\"";

if(isset($_FILES['fileupload'])) {
    $target_path = "../uploaddir/" . $_SESSION['id'] . "/avatar.png";
    $target_path = $target_path . basename($_FILES['fileupload']['name']);
    move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path);
}


header('Location: EditProfile.php');
