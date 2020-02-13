<!doctype html>
<html>
<?php 
session_start();
error_reporting(0);

?>
	<head>
		<meta charset="utf-8">
		<title>Quiz ENADE ESPM</title>
<link rel="stylesheet" type="text/css" href="Quizzes/style.css">
	</head>
	<body>
    <div id="headerdiv">
    <img src="images/header.png" width="900" height="110" id="espmlogo">
        </div>
        <h2 id="sign">Cadastre-se</h2>
        <form name="register" action="Quizzes/register.php" method="post">
        	<table style="width:21%" id="signt">
            	<tr><td id="input">Nome: </td><td>
                <input minlength=3 name="nome" id="nome" style="width:120px"	required></td>
                <td id="input">Sobrenome: </td><td>
                <input minlength=3 name="sobrenome" id="sobrenome" style="width:100px"	required></td></tr>
            	<tr><td id="input">Login: </td><td>
                <input minlength=3 name="loginnew" id="loginnew" style="width:120px"	required></td>
                <td id="input">Senha: </td><td>
                <input minlength=3 type="password" name="passwordnew" id="passwordnew" style="width:100px"	required></td></tr>
        </table>
        <br>
        <br>
        <br>
		<input id="buttons"	type="submit"	name="action"	value="Cadastrar-se" style="width:150px">
        </form>
        <h2 id="login">Faça seu Login</h2>
        <form name="registered" action="Quizzes/login.php" method="POST">
        <table style="width:21%" id="logint">
                    	<tr><td id="input">Login: </td><td>
                <input name="login" style="width:120px"	required></td>
                <td id="input">Senha: </td><td>
                <input type="password" name="password" style="width:100px"	required></td></tr>
                </table>
                <br>
              	<input id="buttons1" type="submit"	name="entrar"	value="Login" style="width:150px">
                </form>
        <br>
        <div id="rankdiv">
        <a href="Quizzes/rankings.php"><img src="images/rankings.png" width="900" height="90" id="rimage"></a>
        </div>
		<!--<?php include 'test/test.php';?>-->
            <h4 id="bottom2">Você é um professor? Clique <a href="adm.php">aqui</a> para ir para a parte administrativa.</h4>
	</body>
</html>