<?php
session_start();
error_reporting(0);
	if($_SESSION['admperm'] == "adm") { $perm = "adm"; } elseif($_SESSION['admperm'] == "cord") { $perm = "cord"; } elseif($_SESSION['admperm'] == "prof") { $perm = "prof"; } else { session_destroy();header('location:../adm.php'); }
?>
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
        </div>
        <h2 id="admchange2">Consultar Alunos:</h2>
              <form name="registered" action="" method="POST">
        <table style="width:21%" id="logintadm">
                    	<tr><td id="inputadm">Nome: </td><td>
                <input name="nome" style="width:120px"	required></td>
                <td id="inputadm">Sobrenome: </td><td>
                <input name="sobrenome" style="width:100px"	required></td></tr>
                </table>
                <br>
              	<input id="buttons1adm" type="submit"	name="entrar"	value="Consultar" style="width:150px">
                </form>
        <?php 
		echo "<table id='tableboy'>";
	$max = 6;
	$varia = 1;
	$nome = $_POST['nome'];
    $entrar = $_POST['entrar'];
    $sobrenome = $_POST['sobrenome'];
include 'conn.php';
        if (isset($entrar)) 	{
			if (empty($_POST['nome']) || empty($_POST['sobrenome'])) 	{
$error = "Nome/Sobrenome Incorretos!";
			}
	else

      {               
            $verifica = mysql_query("SELECT * FROM users WHERE nome = '$nome' AND sobrenome = '$sobrenome' ORDER BY nome DESC", $conn) or die("Erro ao selecionar");
			$verifica2 = mysql_query("SELECT * FROM users WHERE sobrenome = '$sobrenome' ORDER BY nome DESC", $conn) or die("Erro ao selecionar");
			$verifica3 = mysql_query("SELECT * FROM users WHERE nome = '$nome' ORDER BY nome DESC", $conn) or die("Erro ao selecionar");
                if (mysql_num_rows($verifica)<=0)	{
					if (mysql_num_rows($verifica2)<=0)	{
											while($row = mysql_fetch_array($verifica3) and ($varia < $max))	{
	$rsid = strval($row['id']);
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['sociais1points'];
	echo "<tr id='bb'><td id='bb'><a href='alunochecker.php?id=$rsid'>".$rnomedef." ".$rsobrenomedef. "</a></td></tr><br>";
											}}
						
	else {
					while($row = mysql_fetch_array($verifica2) and ($varia < $max))	{

	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rsid = strval($row['id']);
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['sociais1points'];
	echo "<tr id='bb'><td id='bb'><a href='alunochecker.php?id=$rsid'>".$rnomedef." ".$rsobrenomedef. "</a></td></tr><br>";
					}}}
	else {
							while($row = mysql_fetch_array($verifica) and ($varia < $max))	{
	$rsid = strval($row['id']);
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['sociais1points'];
	echo "<tr id='bb'><td id='bb'><a href='alunochecker.php?id=$rsid'>".$rnomedef." ".$rsobrenomedef. "</a></td></tr><br>";
							}}
mysql_close($conn);
echo "</table>";
	  }}
?>
        <br>
           <h4 id="bottom">Clique <a href="admmenuredirect.php">aqui</a> para voltar ao Menu.</h4>
	</body>
</html>