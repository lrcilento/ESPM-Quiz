<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Quiz ENADE ESPM</title>
<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="headerdiv">
    <img src="../images/header.png" width="900" height="110" id="espmlogo">
    <div id="texto"><h1>Bem-vindo ao Quiz preparatório para o ENADE da ESPM!</h1></div>
    <div id="texto2"><h2>Participe de um dos nossos Quizzes para checar seu conhecimento da área.<br><br>Temos Quizzes prontos de todos os semestres e cursos da ESPM com perguntas preparadas pelos próprios professores!<br><br>Veja também como você está em relação aos seus colegas de classe com nosso sistema de ranqueamento!</h2></div>
    <table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Relações Internacionais - 1</td></tr>
<?php
session_start();
$_SESSION['sellervar'] = 2;
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY ri1points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['ri1points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td><td>
    <div id="texto3"><h1>O que ainda está esperando? <a href="../index.php">Vamos lá!</a></h1></div>
        </div>
	</body>
</html>