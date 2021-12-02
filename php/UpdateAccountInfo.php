<?php
session_start();
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('Location: LoginPage.php');
    exit();
}

$target_dir = "../uploaddir/" . $_SESSION['id'] . "/";
$target_file = $target_dir . "avatar.png";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");

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

$sql = "UPDATE Drivers SET fname = \"" . $firstname . "\", lname = \"" . $lastname . "\", team =\"" . $teamSelected . "\", car = \"" . $carSelected . "\" WHERE email = \"" . $_SESSION['id'] . "\"";
$mysqli->query($sql);

// Check if image file is a actual image or fake image

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
}
//check if file exists
if (file_exists($target_file)) {
    chmod($target_file, 0755); //Change the file permissions if allowed
    unlink($target_file); //remove the file
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}
header('Location: EditProfile.php');


