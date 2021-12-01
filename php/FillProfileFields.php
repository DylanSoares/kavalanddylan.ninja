<?php
include('DBConnect.php');

function getFname($email): string
{
    $sql = "SELECT fname FROM Drivers WHERE email = '" . $email . "'";
    $mysqli = connectToDB();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    return $result['fname'];
}

function getLname($email): string
{
    $sql = "SELECT lname FROM Drivers WHERE email = '" . $email . "'";
    $mysqli = connectToDB();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    return $result['lname'];
}

function getTeam($email): string
{
    $sql = "SELECT team FROM Drivers WHERE email = '" . $email . "'";
    $mysqli = connectToDB();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    return $result['team'];
}

function getCar($email): string
{
    $sql = "SELECT car FROM Drivers WHERE email = '" . $email . "'";
    $mysqli = connectToDB();
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    return $result['car'];
}