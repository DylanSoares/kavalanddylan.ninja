<?php
function getFname($email): string
{
    include('DBConnect.php');
    $sql = "SELECT fname FROM Drivers WHERE email = '" . strtolower($email) . "'";
    $mysqli = connectToDB();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
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