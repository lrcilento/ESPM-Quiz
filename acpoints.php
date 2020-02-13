<?php	$rnome = $_SESSION['nome'];
	$rsobrenome = $_SESSION['sobrenome'];
	$rnome = strtolower($rnome);
	$rsobrenome = strtolower($rsobrenome);
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	
	
		$login = $_SESSION['login'];
	$acpoints = $_SESSION['acpoints'];
	$points	=  $_SESSION[''.$quizid2.$quizid.'points'];
	 $quizid = $_SESSION['quizid'];
 $quizid2 = $_SESSION['quizid2'];
 $npoints = intval($points);
 $nacpoints = intval($acpoints);
 $dbpoints = ''.$quizid2.$quizid.'points';
	?>