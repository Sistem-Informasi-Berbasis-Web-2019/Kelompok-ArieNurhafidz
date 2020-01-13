<?php

session_start();
$_SESSION["admin_user_name"];
$_SESSION["password"];

unset($_SESSION["admin_user_name"]);
unset($_SESSION["password"]);

session_unset();
session_destroy();

header("location: index.php");

?>


