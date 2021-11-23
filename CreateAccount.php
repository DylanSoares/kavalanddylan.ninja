<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
/*
//connect to server and select database
//$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "testDB");

//For more info about mysqli functions, go to the site below:
//http://www.w3schools.com/php/php_ref_mysqli.asp

$firstname = $_POST["firstname"];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = strtolower($_POST["email"]);
$age = $_POST['age'];
$gender = $_POST['gender'];
$sql = "SELECT email FROM members WHERE email = '" . $email .
    "'";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

if ($firstname != null && mysqli_num_rows($result) >= 1) {
    echo "<p>Your
email address has already been used! Please use a different email address for a new
account.</p>";
}else if($firstname != null && mysqli_num_rows($result) == 0) {
    //email isnt already in the system

    $sql2 = "INSERT INTO members (firstname, lastname, email, password, age, gender, startdate)".
        " VALUES (\"".$firstname."\",\"".$lastname."\",\"".$email."\", SHA1(\"".$password."\"),".$age.",\"".$gender."\", CURDATE())";

    $result2 = mysqli_query($mysqli, $sql2) or die(mysqli_error($mysqli));

    mkdir("/var/www/html/uploaddir/".$email, 0733);

    echo "<p>Your account has been created!</p>";
    echo "<a href=\"userlogin.html\">Return to Login</a>";
}
*/