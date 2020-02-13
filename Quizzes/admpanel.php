<?php 
	session_start();
	if($_SESSION['admperm'] == "adm") { $perm = "adm"; } elseif($_SESSION['admperm'] == "cord") { $perm = "cord"; } elseif($_SESSION['admperm'] == "prof") { $perm = "prof"; } else { session_destroy();header('location:../adm.php'); }
	?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gerenciar ADMs</title>
<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="headerdiv">
    <img src="../images/header.png" width="900" height="110" id="espmlogo">
        </div>
        <h2 id="registeradm">Cadastrar novo Administrador</h2>
        <form name="register" action="registeradm.php" method="post">
        	<table style="width:21%" id="logintadm">
            	<tr><td id="input">Nome: </td><td>
                <input minlength=3 name="nome" id="nome" style="width:120px"	required></td>
                <td id="input">Sobrenome: </td><td>
                <input minlength=3 name="sobrenome" id="sobrenome" style="width:100px"	required></td></tr>
            	<tr><td id="input">Login: </td><td>
                <input minlength=3 name="loginnew" id="loginnew" style="width:120px"	required></td>
                <td id="input">Senha: </td><td>
                <input minlength=3 type="password" name="passwordnew" id="passwordnew" style="width:100px"	required></td></tr>
                </table><table style="width:50%" id="logintadm">
                <tr><td id="input">Tipo de Administrador: </td><td>
                <select name="perm">
                <option value="adm">Administrador
                </option>
                <option value="cord">Coordenador
                </option>
                <option value="prof">Professor
                </option>
                </select></td></tr>
				<div id="curso"></div>
        </table>
        <br>
        <br>
        <br>
		<input id="buttons1adm"	type="submit"	name="action"	value="Cadastrar" style="width:150px">
        </form>
		<!--<?php include 'test/test.php';?>-->
            <h4 id="bottom2">Você é um professor? Clique <a href="admmenuredirect.php">aqui</a> para ir para a parte administrativa.</h4>
	</body>
</html>