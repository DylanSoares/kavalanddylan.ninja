<?php
function validateEmail(string $email) : bool
{
    $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "RALLYCO");

    $sql = "SELECT email FROM Drivers WHERE email = '" . $email .
        "'";

    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

    if (mysqli_num_rows($result) >= 1) {
        return false;
    } else {
        return true;
    }
}
