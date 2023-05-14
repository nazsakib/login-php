<?php
session_start();

session_destroy();
$_SESSION = array();
header('location: index.php');
setcookie('fixed', 'running', time() - 60*60*24*365);

?>