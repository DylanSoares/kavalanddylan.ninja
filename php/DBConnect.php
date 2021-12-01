<?php
function connectToDB(): mysqli
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    return mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");
}