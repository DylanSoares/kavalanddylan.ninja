<?php
function TrackRegistration($track, $email)
{
    echo "start";
    include('DBConnect.php');
    $mysqli = connectToDB();
    echo "connectd";
    $sql1 = "SELECT email FROM TrackRegistration WHERE email = '" . strtolower($email) . "'";
    echo $sql1;
    $result = $mysqli->query($sql1);

    if (mysqli_num_rows($result) != 1) {
        echo "Entered";
        $sql2 = "INSERT INTO TrackRegistration (email, KFC_Sprint, Costco_Cup, Orchard_Park_Run) VALUES ('" . $email . "', 0, 0, 0)";
        $mysqli->query($sql2);
    }
    $sql3 = "UPDATE TrackRegistration SET " . $track . "= 1 WHERE email =" . $email;
    $mysqli->query($sql3);
}