<?php
include "Login.php";
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
const DB_SERVER = 'localhost';
const DB_USERNAME = 'cs213user';
const DB_PASSWORD = 'letmein';
const DB_NAME = 'RALLYCO';

/* Attempt to connect to MySQL database */
function getDB() {
    /*    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }*/
    return mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
}




