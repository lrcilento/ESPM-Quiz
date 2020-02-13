<?php
session_start();
$_SESSION['pagevar'] = 0;
$_SESSION['acpoints'] = 0;
session_destroy();
header ('location: ../index.php');
?>