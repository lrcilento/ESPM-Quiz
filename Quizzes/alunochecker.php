<?php
$rsid = $_GET['id'];
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
<?php 
	include 'conn.php';
    $verifica = mysql_query("SELECT * FROM users WHERE id = '$rsid'", $conn) or die("Erro ao Selecionar");
	while($row = mysql_fetch_array($verifica)){
		$tech1points = $row['tech1points'];$tech2points = $row['tech2points'];$tech3points = $row['tech3points'];$tech4points = $row['tech4points'];$tech5points = $row['tech5points'];$tech6points = $row['tech6points'];$tech7points = $row['tech7points'];$tech8points = $row['tech8points'];
		$jornalismo1points = $row['jornalismo1points'];$jornalismo2points = $row['jornalismo2points'];$jornalismo3points = $row['jornalismo3points'];$jornalismo4points = $row['jornalismo4points'];$jornalismo5points = $row['jornalismo5points'];$jornalismo6points = $row['jornalismo6points'];$jornalismo7points = $row['jornalismo7points'];$jornalismo8points = $row['jornalismo8points'];
		$pp1points = $row['pp1points'];$pp2points = $row['pp2points'];$pp3points = $row['pp3points'];$pp4points = $row['pp4points'];$pp5points = $row['pp5points'];$pp6points = $row['pp6points'];$pp7points = $row['pp7points'];$pp8points = $row['pp8points'];
		$adm1points = $row['adm1points'];$adm2points = $row['adm2points'];$adm3points = $row['adm3points'];$adm4points = $row['adm4points'];$adm5points = $row['adm5points'];$adm6points = $row['adm6points'];$adm7points = $row['adm7points'];$adm8points = $row['adm8points'];
		$design1points = $row['design1points'];$design2points = $row['design2points'];$design3points = $row['design3points'];$design4points = $row['design4points'];$design5points = $row['design5points'];$design6points = $row['design6points'];$design7points = $row['design7points'];$design8points = $row['design8points'];
		$ri1points = $row['ri1points'];$ri2points = $row['ri2points'];$ri3points = $row['ri3points'];$ri4points = $row['ri4points'];$ri5points = $row['ri5points'];$ri6points = $row['ri6points'];$ri7points = $row['ri7points'];$ri8points = $row['ri8points'];
		$sociais1points = $row['sociais1points'];$sociais2points = $row['sociais2points'];$sociais3points = $row['sociais3points'];$sociais4points = $row['sociais4points'];$sociais5points = $row['sociais5points'];$sociais6points = $row['sociais6points'];$sociais7points = $row['sociais7points'];$sociais8points = $row['sociais8points'];
		$alunonome = $row['nome'];
		$alunosobrenome = $row['sobrenome']; 
		}
?>
        <h2 id="admchange2"><?php echo $alunonome." ".$alunosobrenome ?></h2>
        <br>
		<table id='checkertable' border="1px" bordercolor="#666"><tr><td>•</td><td>TECH</td><td>JNLM</td><td>PP</td><td>ADM</td><td>DSGN</td><td>RI</td><td>CISO</td></tr>
		<tr><td>1<code>&deg;</code></td><td><?php echo $tech1points ?></td><td><?php echo $jornalismo1points ?></td><td><?php echo $pp1points ?></td><td><?php echo $adm1points ?></td><td><?php echo $design1points ?></td><td><?php echo $ri1points ?></td><td><?php echo $sociais1points ?></td></tr>
		<tr><td>2<code>&deg;</code></td><td><?php echo $tech2points ?></td><td><?php echo $jornalismo2points ?></td><td><?php echo $pp2points ?></td><td><?php echo $adm2points ?></td><td><?php echo $design2points ?></td><td><?php echo $ri2points ?></td><td><?php echo $sociais2points ?></td></tr>
		<tr><td>3<code>&deg;</code></td><td><?php echo $tech3points ?></td><td><?php echo $jornalismo3points ?></td><td><?php echo $pp3points ?></td><td><?php echo $adm3points ?></td><td><?php echo $design3points ?></td><td><?php echo $ri3points ?></td><td><?php echo $sociais3points ?></td></tr>
		<tr><td>4<code>&deg;</code></td><td><?php echo $tech4points ?></td><td><?php echo $jornalismo4points ?></td><td><?php echo $pp4points ?></td><td><?php echo $adm4points ?></td><td><?php echo $design4points ?></td><td><?php echo $ri4points ?></td><td><?php echo $sociais4points ?></td></tr>
		<tr><td>5<code>&deg;</code></td><td><?php echo $tech5points ?></td><td><?php echo $jornalismo5points ?></td><td><?php echo $pp5points ?></td><td><?php echo $adm5points ?></td><td><?php echo $design5points ?></td><td><?php echo $ri5points ?></td><td><?php echo $sociais5points ?></td></tr>
		<tr><td>6<code>&deg;</code></td><td><?php echo $tech6points ?></td><td><?php echo $jornalismo6points ?></td><td><?php echo $pp6points ?></td><td><?php echo $adm6points ?></td><td><?php echo $design6points ?></td><td><?php echo $ri6points ?></td><td><?php echo $sociais6points ?></td></tr>
		<tr><td>7<code>&deg;</code></td><td><?php echo $tech7points ?></td><td><?php echo $jornalismo7points ?></td><td><?php echo $pp7points ?></td><td><?php echo $adm7points ?></td><td><?php echo $design7points ?></td><td><?php echo $ri7points ?></td><td><?php echo $sociais7points ?></td></tr>
		<tr><td>8<code>&deg;</code></td><td><?php echo $tech8points ?></td><td><?php echo $jornalismo8points ?></td><td><?php echo $pp8points ?></td><td><?php echo $adm8points ?></td><td><?php echo $design8points ?></td><td><?php echo $ri8points ?></td><td><?php echo $sociais8points ?></td></tr>
           <h4 id="bottom">Clique <a href="admcheck.php">aqui</a> para voltar ao Menu.</h4>
	</body>
</html>