function updateEmail() {
    let text;
    text = "Email alaredy exists";
    document.getElementById("emailText").innerHTML = text;
}

function validateForm() {

    var xmlhttp = new XMLHttpRequest();
/*    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };*/
    xmlhttp.open("GET", "emailValidation.php", true);
    xmlhttp.send();

    return xmlhttp;

}