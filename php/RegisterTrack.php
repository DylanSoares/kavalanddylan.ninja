<?php
function TrackRegistration($track, $email)
{
    include('DBConnect.php');
    $mysqli = connectToDB();

    $sql1 = "SELECT email FROM TrackRegistration WHERE email = ".$email;
    $result = $mysqli->query($sql1);
    echo "queried";
    if (mysqli_num_rows($result) != 1) {
        echo "Entered";
        $sql2 = "INSERT INTO TrackRegistration (email, KFC_Sprint, Costco_Cup, Orchard_Park_Run) VALUES (" . $email . ", 0, 0, 0)";
        $mysqli->query($sql2);
    }
    $sql3 = "UPDATE TrackRegistration SET " . $track . "= 1 WHERE email =" . $email;
    $mysqli->query($sql3);
}