<?php
function GenerateTable($track, $email): string
{
    include('DBConnect.php');
    $mysqli = connectToDB();
    $i = 0;
    $j = 0;
    $_leftArr[0] = "";
    $_rightArr[0] = "";
    $output = "";

    $sql = "SELECT * FROM " . $track;
    $result = $mysqli->query($sql);

    $leftTurns = "SELECT turnQuote FROM LeftTurns";
    $leftResult = $mysqli->query($leftTurns);
    while ($row = $leftResult->fetch_assoc()) {
        $_leftArr[$i] = $row["turnQuote"];
        $i++;
    }

    $rightTurns = "SELECT turnQuote FROM RightTurns";
    $rightResult = $mysqli->query($rightTurns);
    while ($row = $rightResult->fetch_assoc()) {
        $_rightArr[$j] = $row["turnQuote"];
        $j++;
    }

    //echo table rows for each row returned
    while ($row = $result->fetch_assoc()) {
        $output = $output . "<tr><td>" . $row["Turn_ID"] . "</td><td>" . $row["Turn_Dir"] . "</td><td>";
        switch ($row["Turn_Dir"]) {
            case "left":
                $leftQuote = mt_rand(0, sizeof($_leftArr) - 1);
                $output = $output . $_leftArr[$leftQuote];
                break;
            case "right":
                $rightQuote = mt_rand(0, sizeof($_rightArr) - 1);
                $output = $output . $_rightArr[$rightQuote];
                break;
        }
        $output = $output . "</td></tr>";
    }

    $sql1 = "SELECT email FROM TrackRegistration WHERE email = '" . strtolower($email) . "'";
    $result = $mysqli->query($sql1);

    if (mysqli_num_rows($result) != 1) {
        $sql2 = "INSERT INTO TrackRegistration (email, KFC_Sprint, Costco_Cup, Orchard_Park_Run) VALUES ('" . $email . "', 0, 0, 0)";
        $mysqli->query($sql2);
    }
    $sql3 = "UPDATE TrackRegistration SET " . $track . "= 1 WHERE email ='" . $email . "'";
    $mysqli->query($sql3);

    return $output;
}