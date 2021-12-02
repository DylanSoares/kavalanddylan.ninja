$(document).ready(function () {
    // Handler for .ready() called.

    $('html, body').animate({
        scrollTop: $('#about').offset().top
    }, "1000");
});