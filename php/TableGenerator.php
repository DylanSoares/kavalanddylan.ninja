<?php
function GenerateTable($track): string
{
    $i = 0;
    $j = 0;
    $_leftArr[0] = "";
    $_rightArr[0] = "";
    $output = "";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");
    $sql = "SELECT * FROM " . $track . ";";
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

    return $output;
}