<?php

session_start();
$_SESSION["registrasi_nama"];
$_SESSION["registrasi_no_hp"];

unset($_SESSION["registrasi_nama"]);
unset($_SESSION["registrasi_no_hp"]);

session_unset();
session_destroy();

header("location: index.php");

?>


