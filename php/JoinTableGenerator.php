<?php
function JoinGenerateTable(): string
{
    include('DBConnect.php');
    $mysqli = connectToDB();
    $output = "";

    $sql = "SELECT d.fname, d.team, d.car, t.KFC_Sprint, t.Costco_Cup, t.Orchard_Park_Run FROM Drivers d, TrackRegistration t WHERE d.email = t.email";
    $result = $mysqli->query($sql);

    //echo table rows for each row returned
    while ($row = $result->fetch_assoc()) {
        $output = $output . "<tr><td>" . $row["fname"] . "</td><td>" . $row["team"] . "</td><td>". $row["car"] . "</td><td>";

        if($row["KFC_Sprint"] == 1) {
            $output = $output . "\u{2713}";
        }
        $output = $output . "</td><td>";
        if($row["Costco_Cup"] == 1) {
            $output = $output . "\u{2713}";
        }
        $output = $output . "</td><td>";
        if($row["Orchard_Park_Run"] == 1) {
            $output = $output . "\u{2713}";
        }
        $output = $output . "</td></tr>";

    }

    return $output;
}