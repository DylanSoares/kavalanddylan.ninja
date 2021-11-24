<?php
//login php to handle the login,
//if successful should go to landing_page.php
//if not redirect
session_start();

if (filter_input (INPUT_COOKIE, 'auth') == session_id()) {
    header("Location: landing_page.php");
}
//connect to server and select database
$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");

//create and issue the query
$targetname = filter_input(INPUT_POST, 'email');
$targetpasswd = filter_input(INPUT_POST, 'password');
$sql = "SELECT email, fname, lname, team, car FROM Drivers WHERE email = '" . $targetname .
    "' AND pword = SHA1('" . $targetpasswd . "')";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

//get the number of rows in the result set; should be 1 if a match
if (mysqli_num_rows($result) == 1) {

    //if authorized, get the values of f_name l_name
    while ($info = mysqli_fetch_array($result)) {
        $f_name = stripslashes($info['firstname']);
        $l_name = stripslashes($info['lastname']);
        $email = stripslashes($info['email']);
        $team = stripslashes($info['team']);
        $car = stripslashes($info['car']);
    }

    //set authorization cookie using curent Session ID
    setcookie("auth", session_id(), time() + 60 * 30, "/", "", 0);

    header("Location: landing_page.php");
    //create display string

} else {
    //redirect back to login form if not authorized
    header("Location: ../Login.html");
}
exit;
