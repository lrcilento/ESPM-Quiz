<?php
	session_start();
	$login = $_SESSION['login'];
	$acpoints = $_SESSION['acpoints'];
	$points	=  $_SESSION[''.$quizid2.$quizid.'points'];
	 $quizid = $_SESSION['quizid'];
 $quizid2 = $_SESSION['quizid2'];
 $npoints = intval($points);
 $nacpoints = intval($acpoints);
 $dbpoints = ''.$quizid2.$quizid.'points';
include 'conn.php';
		if ($_SESSION[''.$quizid2.$quizid.'points'] <= $nacpoints) {
			mysql_query("UPDATE users SET ".$dbpoints."='$acpoints' WHERE login='$login'");
			header('Location:quiz_end.php');
			}
			else{	  header('Location:quiz_end.php');
			}

						mysql_close($conn);
?> 