<?php
function getFname($email): string
{
    include('DBConnect.php');
    $mysqli = connectToDB();
    $sql = "SELECT fname FROM Drivers WHERE email = '" . strtolower($email) . "'";
    $result = $mysqli->query($sql);
    return $result['fname'];
}

function getLname($email): string
{
    include('DBConnect.php');
    $sql = "SELECT lname FROM Drivers WHERE email = '" . strtolower($email) . "'";
    $mysqli = connectToDB();
    $result = $mysqli->query($sql);
    return $result['lname'];
}

function getTeam($email): string
{
    include('DBConnect.php');
    $sql = "SELECT team FROM Drivers WHERE email = '" . strtolower($email) . "'";
    $mysqli = connectToDB();
    $result = $mysqli->query($sql);
    return $result['team'];
}

function getCar($email): string
{
    include('DBConnect.php');
    $sql = "SELECT car FROM Drivers WHERE email = '" . strtolower($email) . "'";
    $mysqli = connectToDB();
    $result = $mysqli->query($sql);
    return $result['car'];
}