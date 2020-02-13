<?php
session_start();
if ($_SESSION['lenght'] != 10 && $_SESSION['lenght'] != 25){session_destroy();	header('Location:../index.php');;}
include'getquestion.php';
$qname = $_SESSION['qname'];
$righta = $_SESSION['righta'];
$wrong1 = $_SESSION['wrong1'];
$wrong2 = $_SESSION['wrong2'];
$wrong3 = $_SESSION['wrong3'];
$wrong4 = $_SESSION['wrong4'];
include 'replacer.php';
$_SESSION['pagevar']=$pagevar;
include'suckit.php';
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylequz.css">
<meta charset="utf-8">
<title><?php echo $cursename ?> <?php echo $quizid ?> - <?php echo $pagevar ?></title>
</head>

<body>
    <div id="headerdiv">
        <img src="../images/<?php echo $quizid2 ?>.png" width="900" height="110" id="espmlogo">
        </div>
<h2><?php echo $pagevar ?><b>. </b><?php echo $qname ?></h2>
<table width="100%" id="form">
 <form action="checker.php" method="POST"> <?php 
 $rand = rand(1,5);
 if ($rand==1){
  echo $rand1;
 }
  elseif ($rand==2){
  echo $rand2;
 }
  elseif ($rand==3){
  echo $rand3;
 }
  elseif ($rand==4){
  echo $rand4;
 }
  elseif ($rand==5){
  echo $rand5;
 }
   ?>
  </table>
<input id="buttons" type="submit"	name="next"	value="Continuar" style="width:150px">
</form> 
<br>
<?php	include 'acpoints.php';
$lenght = $_SESSION['lenght'];
	?>
<b id="welcome"><?php echo "".$rnomedef." ".$rsobrenomedef." - Highscore: ".$npoints." - Pontuação Atual: ".$nacpoints." | Questão: ".$pagevar."/".$lenght."<br>Abriu o quiz errado? Faz parte, vamos voltar <a href='quizhomeredirect.php'>lá!</a>";  ?></b>

</body>
</html>