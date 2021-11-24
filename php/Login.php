<?php
//login php to handle the login,
//if successful should go to landing_page.html
//if not redirect

/*
header("Location: ./Login.php");
exit();*/

//check for required fields from the form
/*if ((!filter_input(INPUT_POST, 'username')) || (!filter_input(INPUT_POST, 'password'))) {
//if ((!isset($_POST["username"])) || (!isset($_POST["password"]))) {
    header("Location: userlogin.html");
    exit;
}*/

//connect to server and select database
//$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "testDB");

//For more info about mysqli functions, go to the site below:
//http://www.w3schools.com/php/php_ref_mysqli.asp

/* create and issue the query
  $sql = "SELECT f_name, l_name FROM auth_users WHERE username = '".$_POST["username"].
  "' AND password = SHA1('".$_POST["password"]."')";
 */

//create and issue the query
/*$targetname = filter_input(INPUT_POST, 'username');
$targetpasswd = filter_input(INPUT_POST, 'password');
$sql = "SELECT firstname, lastname, email FROM members WHERE email = '" . $targetname .
    "' AND password = SHA1('" . $targetpasswd . "')";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

//get the number of rows in the result set; should be 1 if a match
if (mysqli_num_rows($result) == 1) {

    //if authorized, get the values of f_name l_name
    while ($info = mysqli_fetch_array($result)) {
        $f_name = stripslashes($info['firstname']);
        $l_name = stripslashes($info['lastname']);
        $email = stripslashes($info['email']);
    }


    $directory = "/var/www/html/uploaddir/" . $email . "/";

    //set authorization cookie using curent Session ID
    setcookie("auth", session_id(), time() + 60 * 30, "/", "", 0);

    //create display string
    $display_block = "
        <body style='background-color:bisque'>
            <h1><strong>Welcome " . $f_name . " " . $l_name . "!</strong></h1>
        </body>";

    $form_block = "<form action=\"LottoTickets.php\" method=\"post\">
                <fieldset>
                <legend>Lottery Tickets</legend>
                <p><b>Select either or both lotteries to play.</b></p>
                <input type=\"checkbox\" id=\"max\" name=\"max\" value=\"max\">
                <label for=\"max\">Lotto Max</label>
                <input type=\"checkbox\" id=\"649\" name=\"649\" value=\"649\">
                <label for=\"649\">Lotto 6/49</label>
                <input type=\"submit\" value=\"Submit\">
                </fieldset>
            </form>
            <form action=\"fileupload.php\" enctype=\"multipart/form-data\" method=\"POST\">
                <fieldset>
                <legend>File Upload</legend>
                <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\"/>
                <input type=\"hidden\" name=\"directory\" value=\"" . $directory . "\"/>
                <p><b>File to Upload:</b>
                <input type=\"file\" name=\"fileupload\"/></p>
                <p><input type=\"submit\" name=\"submit\" value=\"Upload\"></p>
                </fieldset>
            </form>";
} else {
    //redirect back to login form if not authorized
    header("Location: userlogin.html");
    exit;
}
*/