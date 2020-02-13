
<?php
					include 'conn.php';
session_start();
$user_check=$_SESSION['login'];
$ses_sql=mysql_query("SELECT username FROM login WHERE login='$user_check'", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['login'];
if(!isset($login_session)){
mysql_close($conn);
header('Location: ../index.php');
}
?>