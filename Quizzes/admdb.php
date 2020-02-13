	<?php 
	session_start();
	if($_SESSION['admperm'] == "adm") { $perm = "adm"; } elseif($_SESSION['admperm'] == "cord") { $perm = "cord"; } elseif($_SESSION['admperm'] == "prof") { $perm = "prof"; } else { session_destroy();header('location:../adm.php'); }
include 'conn.php';
$quizid2 = $_POST['Curso'];
$quizid	=	$_POST['Semestre'];
$number	=	$_POST['number'];
$admnome=$_SESSION['admnome'];
$admsobrenome=$_SESSION['admsobrenome'];
$admdef = $admnome." ".$admsobrenome;
$qname=	$_POST['qname'];
$righta=	$_POST['righta'];
$wrong1=	$_POST['wrong1'];
$wrong2=	$_POST['wrong2'];
$wrong3=	$_POST['wrong3'];
$wrong4=	$_POST['wrong4'];
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
$id = ($number + $handcaps);
 if (!$conn) {
     die("Falha ao se conectar ao banco de dados");
} 
$result = mysql_query("SELECT * FROM questions WHERE id = '$id';");
if(!$result)
{
    die(mysql_error());
}
if(mysql_num_rows($result) > 0)
{ 
$_SESSION['admdefq'] = $admdef;$_SESSION['qid'] = $id;$_SESSION['qnametest'] = $qname;$_SESSION['rightatest'] = $righta;$_SESSION['wrong1test'] = $wrong1;$_SESSION['wrong2test'] = $wrong2;$_SESSION['wrong3test'] = $wrong3;$_SESSION['wrong4test'] = $wrong4;
echo "<script language='javascript' type='text/javascript'>
var r = confirm('Essa questão já existe:\\n\\n".$qname."\\n\\nDeseja altera-la?');
if (r == true) {
	
window.location.href='admupdate.php';
}
else {
window.location.href='admchange.php';
}
	</script>";
}			
else{
mysql_query("INSERT INTO questions (id, qname, righta, wrong1, wrong2, wrong3, wrong4, criador) VALUES ('$id', '$qname', '$righta', '$wrong1', '$wrong2', '$wrong3', '$wrong4', '$admdef')");
mysql_close($conn);
    echo"<script language='javascript' type='text/javascript'>alert('Questão criada com sucesso!');window.location.href='admchange.php';</script>";;
                    die();
}   	
 ?> 