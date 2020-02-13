<?php
$pagevar = $_SESSION['pagevar'];
include 'conn.php';
	mysql_query("SET NAMES 'utf8'", $conn);
	 $quizid = $_SESSION['quizid'];
 $quizid2 = $_SESSION['quizid2'];
$handcap1 = 0;
$handcap2 = 0;
if ($quizid2 == "jornalismo"){
$handcap2 = ($handcap2+200);
}
elseif ($quizid2 == "design"){
$handcap2 = ($handcap2+400);
}
elseif ($quizid2 == "pp"){
$handcap2 = ($handcap2+600);
}
elseif ($quizid2 == "ri"){
$handcap2 = ($handcap2+800);
}
elseif ($quizid2 == "sociais"){
$handcap2 = ($handcap2+1000);
}
elseif ($quizid2 == "adm"){
$handcap2 = ($handcap2+1200);
}

if ($quizid == 2){
$handcap1 = ($handcap1+25);
}
elseif ($quizid == 3){
$handcap1 = ($handcap1+50);
}
elseif ($quizid == 4){
$handcap1 = ($handcap1+75);
}
elseif ($quizid == 5){
$handcap1 = ($handcap1+100);
}
elseif ($quizid == 6){
$handcap1 = ($handcap1+125);
}
elseif ($quizid == 7){
$handcap1 = ($handcap1+150);
}
elseif ($quizid == 8){
$handcap1 = ($handcap1+175);
}
$handcaps = ($handcap1 + $handcap2);
$id = ($pagevar + $handcaps);
$verifica = mysql_query("SELECT *, CONVERT(qname USING utf8) FROM questions WHERE id = '$id'", $conn) or die("Erro ao selecionar pergunta!");
while($row = mysql_fetch_array($verifica)){
$_SESSION['qname'] = $row['qname'];
$_SESSION['righta'] = $row['righta'];
$_SESSION['wrong1'] = $row['wrong1'];
$_SESSION['wrong2'] = $row['wrong2'];
$_SESSION['wrong3'] = $row['wrong3'];
$_SESSION['wrong4'] = $row['wrong4'];
mysql_close($conn);
}
?>