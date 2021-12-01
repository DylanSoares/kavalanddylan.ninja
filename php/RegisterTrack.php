<?php
function TrackRegistration($track, $email)
{

    include('DBConnect.php');
    $mysqli = connectToDB();

    $sql1 = "SELECT email FROM TrackRegistration";
    $result = $mysqli->query($sql1);

    if (mysqli_num_rows($result) == 1) {
        $sql2 = "UPDATE TrackRegistration SET " . $track . "=1 WHERE email =" . $email;
    }else{
        $sql2 = "INSERT INTO TrackRegistration VALUES(email, ".$track.") VALUES (".$email.", 1)";
    }
    $mysqli->query($sql2);
}