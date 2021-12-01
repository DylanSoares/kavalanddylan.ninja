<?php
function JoinGenerateTable(): string
{
    include('DBConnect.php');
    $mysqli = connectToDB();
    $output = "";

    $sql = "SELECT d.fname, t.KFC_Sprint, t.Costco_Cup, t.Orchard_Park_Run FROM Drivers d, TrackRegistration t WHERE d.email = t.email";
    $result = $mysqli->query($sql);

    //echo table rows for each row returned
    while ($row = $result->fetch_assoc()) {
        $output = $output . "<tr><td>" . $row["d.fname"] . "</td><td>" . $row["t.KFC_Sprint"] . "</td><td>" . $row["t.Costco_Cup"] . "</td><td>" . $row["t.Orchard_Park_Run"] . "</td></tr>";
    }

    return $output;
}