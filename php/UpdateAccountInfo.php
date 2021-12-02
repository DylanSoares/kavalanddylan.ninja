<?php
session_start();
//attempt to invalidate cache
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('Location: LoginPage.php');
    exit();
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");
if (isset($_POST['submitButton'])) {
    if (isset($_POST['firstname'])) {
        $firstname = stripslashes($_POST["firstname"]);
    }
    if (isset($_POST['lastname'])) {
        $lastname = stripslashes($_POST['lastname']);
    }

    if (isset($_POST['car'])) {
        $car = stripslashes($_POST['car']);
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
        $team = stripslashes($_POST['team']);
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

   /* $target_dir = "../uploaddir/" . $_SESSION['id'] . "/";
    $target_file = $target_dir . "/avatar.png";

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);*/

    $target_dir = "../uploaddir/" . $_SESSION['id'] . "/";
    $target_file = $target_dir . "/avatar.png";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "<script> alert(\"Error: File is not an image.\");</script>";
            $uploadOk = 0;
        }
    }

// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "<script> alert(\"Sorry, your file is too large.\");</script>";
        $uploadOk = 0;
    }

// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "<script> alert(\"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\");</script>";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script> alert(\"File upload error.\");</script>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<script> alert(\"Account succesfully updated.\");</script>";
        } else {
            echo "<script> alert(\"Error uploading file.\");</script>";
        }
    }
}
echo "<script> alert(\"Profile updated.\");</script>";
header('Location: EditProfile.php');
?>

<html lang="en">
</html>
