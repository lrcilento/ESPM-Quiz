<?php
session_start();
$quizid=$_SESSION['quizid'];
$quizid2=$_SESSION['quizid2'];
if ($quizid2 == "tech"){
$cursename = "Sistemas de Informação";
}
elseif ($quizid2 == "jornalismo"){
$cursename = "Jornalismo";
}
elseif ($quizid2 == "design"){
$cursename = "Design";
}
elseif ($quizid2 == "pp"){
$cursename = "Publicidade e Propaganda";
}
elseif ($quizid2 == "ri"){
$cursename = "Relações Internacionais";
}
elseif ($quizid2 == "sociais"){
$cursename = "Ciências Sociais";
}
elseif ($quizid2 == "adm"){
$cursename = "Administração";
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylequz.css">
<meta charset="utf-8">
<title><?php echo $cursename ?> <?php echo $quizid ?> - Fim</title>
</head>

<body>
    <div id="headerdiv">
        <img src="../images/<?php echo $quizid2 ?>.png" width="900" height="110" id="espmlogo">
        </div>
<body>
<h2 id="desc4">Parabéns!</h2><br><h2 id="desc">Quiz de <?php echo $cursename ?> <br>do <?php echo $quizid ?>° semestre concluído!</h2>
<h2 id="desc"><?php echo "Sua pontuação foi ".$_SESSION['acpoints'].", veja a <br>pontuação de seus colegas de classe:"; ?></h2>
<p id="desc2">Clique <a href="quizhomeredirect.php">aqui</a> para voltar e escolher um novo Quiz!</p>
<p id="desc2">Ou <a href="indexredirect.php">aqui</a> para deslogar e voltar para a Home.</p>
<table id="rankingtable" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb"><?php echo $cursename ?> - <?php echo $quizid ?></td></tr>
<?php
$varia=1;
include 'conn.php';
$varia = 1;
$max = 6;
 $dbpoints = ''.$quizid2.$quizid.'points';
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY '.$dbpoints.' DESC';

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
	$pointstotal =  $row[''.$quizid2.$quizid.'points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table>

	
</body>
</html>
