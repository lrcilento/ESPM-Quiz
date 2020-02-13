<?php 
	session_start();
		if($_SESSION['admperm'] == "cord") { $perm = "cord"; } else { session_destroy();header('location:../adm.php'); }
	?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu de Administrador</title>
</head>
<link rel="stylesheet" type="text/css" href="styler.css">
<body>
 <div id="headerdiv">
    <img src="../images/header.png" width="900" height="110" id="espmlogo7">
    <h1 id="headerr">O que deseja fazer?</h1>
    <a href="admchange.php"><h3>Alterar/Criar Questões</h3></a>
    <a href="admcheck.php"><h3>Consultar Alunos</h3></a>
    <h4 id="bottom2">Bem-vindo! <?php echo $_SESSION['admnome']." ".$_SESSION['admsobrenome'] ?></h4>
    <h4 id="bottom">Clique <a href="../index.php">aqui</a> para voltar ao Home.</h4>
</body>
</html>