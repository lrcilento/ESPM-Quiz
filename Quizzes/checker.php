 <?php 
 session_start();
 $pagevar = $_SESSION['pagevar'];
 $acpoints = $_SESSION['acpoints'];
 $answer = $_POST['q'.$pagevar.'t'];
 $quizid = $_SESSION['quizid'];
 $quizid2 = $_SESSION['quizid2'];
 $lenght = $_SESSION['lenght'];
 if ($pagevar <= 12){
	if ($answer == "right" and $lenght == $pagevar) {
		$acpoints = ($acpoints + 2);
		$_SESSION['acpoints'] = $acpoints;
		$pagevar = ($_SESSION['pagevar'] + 1);
		$_SESSION['pagevar'] = $pagevar;
			header('Location:points.php');
	}
	elseif ($lenght == $pagevar){
 		  header('Location:points.php');
	}
	elseif ($answer == "right"){
			$acpoints = ($acpoints + 2);
		$_SESSION['acpoints'] = $acpoints;
		$pagevar = ($_SESSION['pagevar'] + 1);
		$_SESSION['pagevar'] = $pagevar;
	header('Location:quiz.php');
	}
	else{
		$pagevar = ($_SESSION['pagevar'] + 1);
		$_SESSION['pagevar'] = $pagevar;
	header('Location:quiz.php');
 
	}
 }
 
 elseif ($pagevar > 12 && $pagevar < 22) {
	  if ($answer == "right" and $lenght == $pagevar) {
	 $acpoints = ($acpoints + 3);
	$_SESSION['acpoints'] = $acpoints;
	 $pagevar = ($_SESSION['pagevar'] + 1);
	$_SESSION['pagevar'] = $pagevar;
		  header('Location:points.php');
 }
 elseif ($lenght == $pagevar){
 		  header('Location:points.php');
 }
  elseif ($answer == "right"){
	  	 $acpoints = ($acpoints + 3);
	$_SESSION['acpoints'] = $acpoints;
	 $pagevar = ($_SESSION['pagevar'] + 1);
	$_SESSION['pagevar'] = $pagevar;
	header('Location:quiz.php');
  }
 else{
	  $pagevar = ($_SESSION['pagevar'] + 1);
	$_SESSION['pagevar'] = $pagevar;
	header('Location:quiz.php');
 
 }
 }
 
 
 else {
 if ($answer == "right" and $lenght == $pagevar) {
	 $acpoints = ($acpoints + 4);
	$_SESSION['acpoints'] = $acpoints;
	 $pagevar = ($_SESSION['pagevar'] + 1);
	$_SESSION['pagevar'] = $pagevar;
		  header('Location:points.php');
 }
 elseif ($lenght == $pagevar){
 		  header('Location:points.php');
 }
  elseif ($answer == "right"){
	  	 $acpoints = ($acpoints + 4);
	$_SESSION['acpoints'] = $acpoints;
	 $pagevar = ($_SESSION['pagevar'] + 1);
	$_SESSION['pagevar'] = $pagevar;
	header('Location:quiz.php');
  }
 else{
	  $pagevar = ($_SESSION['pagevar'] + 1);
	$_SESSION['pagevar'] = $pagevar;
	header('Location:quiz.php');
 
 }
 	 
	 
 }
 
 
 ?>