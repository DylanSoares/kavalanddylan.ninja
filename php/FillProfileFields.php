<?php
function getFname($email): string
{
    echo "Line1";
    include('DBConnect.php');
    echo "Line2";
    $sql = "SELECT fname FROM Drivers WHERE email = '" . strtolower($email) . "'";
    echo "Line3";
    $mysqli = connectToDB();
    echo "Line4";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    echo "Line5";
    return $result['fname'];
}

function getLname($email): string
{
    include('DBConnect.php');
    $sql = "SELECT lname FROM Drivers WHERE email = '" . $email . "'";
    $mysqli = connectToDB();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    return $result['lname'];
}

function getTeam($email): string
{
    include('DBConnect.php');
    $sql = "SELECT team FROM Drivers WHERE email = '" . $email . "'";
    $mysqli = connectToDB();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    return $result['team'];
}

function getCar($email): string
{
    include('DBConnect.php');
    $sql = "SELECT car FROM Drivers WHERE email = '" . $email . "'";
    $mysqli = connectToDB();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    return $result['car'];
}