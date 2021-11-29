<?php
function connectToDB() : mysqli {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");
}