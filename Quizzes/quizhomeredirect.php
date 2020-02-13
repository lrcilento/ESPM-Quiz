<?php
session_start();
 include 'conn.php';
 $_SESSION['acpoints'] = 0;
header ('location:quizhome.php');
 $_SESSION['lenght'] = 0;
?>