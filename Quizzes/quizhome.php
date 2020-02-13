<?php
session_start();
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Escolha seu Quiz</title>
</head>

<body>
    <div id="headerdiv">
        <img src="../images/header.png" width="900" height="110" id="espmlogo">
        </div>
<h2 id="signb">Escolha seu Quiz</h2>
	<form method="post" action="quizselect.php">
    <table style="width:22%" id="signt">
	   <tr><td>Curso: </td><td>
                <select name="Curso">
                <option value="tech">Sistemas de Informação
                </option>
                <option value="jornalismo">Jornalismo
                </option>
                <option value="design">Design
                </option>
                <option value="ri">Relações Internacionais
                </option>
                <option value="pp">Publicidade e Propaganda
                </option>
                <option value="adm">Administração
                </option>
                <option value="sociais">Ciências Sociais
                </option>
                </select></td></tr>
                <tr><td>Semestre: </td><td>
                <select name="Semestre">
                <option value="1">Primeiro
                </option>
				<option value="2">Segundo
                </option>
                <option value="3">Terceiro
                </option>
                <option value="4">Quarto
                </option>
                <option value="5">Quinto
                </option>
                <option value="6">Sexto
                </option>
				<option value="7">Sétimo
                </option>
                <option value="8">Oitavo
                </option>
                </select></td></tr>
                <tr><td>Tamanho: </td><td>
                <select name="Lenght">
                <option value="curto">Curto
                </option>
				<option value="original">Original
                </option>
                </select></td></tr>
                </table>
                <br>
                <br>
                <br>
			 <input id="buttons3" type="submit"	name="action"	value="Comece o Quiz!" style="width:150px">
                	</form>
    <h4 id="bottom">Clique <a href="../index.php">aqui</a> para voltar ao Home.</h4>
</body>
</html>
