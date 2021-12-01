<?php
session_start();
//login php to handle the login
include('DBConnect.php');
$mysqli = connectToDB();

//connect to server and select database
//create and issue the query
$targetname = mysqli_real_escape_string($mysqli, $_POST['email']);
$targetpasswd = mysqli_real_escape_string($mysqli, $_POST['password']);
$sql = "SELECT email, fname, lname, team, car FROM Drivers WHERE email = '" . strtolower($targetname) .
    "' AND pword = SHA1('" . $targetpasswd . "')";
$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
//get the number of rows in the result set; should be 1 if a match
if (mysqli_num_rows($result) == 1) {
    //$email = "";
    //if authorized, get the values of f_name l_name
    while ($info = mysqli_fetch_array($result)) {
        $f_name = stripslashes($info['firstname']);
        $l_name = stripslashes($info['lastname']);
        $email = stripslashes($info['email']);
        $team = stripslashes($info['team']);
        $car = stripslashes($info['car']);
    }
    $_SESSION['id'] = $email;
    //set authorization cookie using current Session ID

    header("Location: LandingPage.php");
    //create display string
} else {
    //redirect back to login form if not authorized
    header("Location: LoginPage.php");
}
exit;