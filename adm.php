	<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Quiz ENADE ESPM - ADM</title>
        <link rel="stylesheet" type="text/css" href="Quizzes/style.css">
	</head>
	<body>
    <div id="headerdiv">
    <img src="images/header.png" width="900" height="110" id="espmlogo">
        </div>
        <h2 id="loginadm">Faça seu Login</h2>
        <form name="registered" action="Quizzes/loginadm.php" method="POST">
        <table style="width:21%" id="logintadm">
                    	<tr><td id="inputadm">Login: </td><td>
                <input name="login" style="width:120px"	required></td>
                <td id="inputadm">Senha: </td><td>
                <input type="password" name="password" style="width:100px"	required></td></tr>
                </table>
                <br>
              	<input id="buttons1adm" type="submit"	name="entrar"	value="Login" style="width:150px">
                </form>
        <br>
            <h4 id="bottom">Clique <a href="../index.php">aqui</a> para voltar ao Home.</h4>
		<!--<?php include 'test/test.php';?>-->
	</body>
</html>
