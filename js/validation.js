function updateEmail() {
    let text;
    text = "Email alaredy exists";
    document.getElementById("emailText").innerHTML = text;
}

function validateForm() {
    let php = "<?php $mysqli = mysqli_connect(\"localhost\", \"cs213user\", \"letmein\", \"RALLYCO\");" +
        "$email = strtolower($_POST[\"email\"]);" +
        "$sql = \"SELECT email FROM Drivers WHERE email = '\" . $email .\n" +
        "\"'\";" +
        "if (mysqli_num_rows($result) >= 1) {" +
        "echo \"<script type=\"text/javascript\">validateForm(false)</script>\";}" +
        "else {validateFormBool(true)}?>";
    return false;
}

function validateFromBool(status) {
    if (status === false) {
        updateEmail()
        return false;
    }else{
        return true;
    }
}
