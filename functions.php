<!-- php -->
<?php
session_start();

function user_logged_in(  ) {
    if(isset($_SESSION['success']) || isset($_COOKIE['fixed'])) {
    return true;
}
else {
    return false;
}
}


// title functions
function title() {
    global $title;
    echo $title;
}
?>
