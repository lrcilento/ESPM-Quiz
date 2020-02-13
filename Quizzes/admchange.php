	<?php 
	session_start();
	if($_SESSION['admperm'] == "adm") { $perm = "adm";
	} 
	elseif($_SESSION['admperm'] == "cord") { $perm = "cord"; } elseif($_SESSION['admperm'] == "prof") { $perm = "prof"; } else { session_destroy();header('location:../adm.php'); }
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
        <h2 id="admchange2">Altere as Questões:</h2>
        <form name="register" action="admdb.php" method="post">
        <table style="width:50%" id="admchange5">
                           
                     <tr><td id="1337">Curso da Questão: </td><td>
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
                <tr><td id="1337">Semestre da Questão: </td><td>
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
                <tr><td id="1337">Número da Questão: </td><td>
                <select name="number">
                <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                </select></td></tr>
                </table>
                <table style="width:21%" id="admchange">
            	<tr><td id="input">Pergunta: </td></tr><tr><td id="1337">
                <textarea minlength=3 name="qname" id="qname" style="width:400px"	required></textarea></td>
                </tr><tr><td id="input">Reposta Correta: </td></tr><tr><td id="1337">
                <input minlength=3 name="righta" id="righta" style="width:400px"	required></td></tr>
            	<tr><td id="input">Respota Errada 1: </td></tr><tr><td id="1337">
                <input minlength=3 name="wrong1" id="wrong1" style="width:400px"	required></td>
                </tr><tr><td id="input">Respota Errada 2: </td></tr><tr><td id="1337">
                <input minlength=3 name="wrong2" id="wrong2" style="width:400px"	required></td>
                </tr><tr><td id="input">Respota Errada 3: </td></tr><tr><td id="1337">
                <input minlength=3 name="wrong3" id="wrong3" style="width:400px"	required></td>
                </tr><tr><td id="input">Respota Errada 4: </td></tr><tr><td id="1337">
                <input minlength=3 name="wrong4" id="wrong4" style="width:400px"	required></td>
                </tr><tr><td id="1337"><input id="buttons8" type="submit"	name="action"	value="Alterar!" style="width:150px"></td></tr>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                 </table>
                <h4><br>Lembre-se que questões são dividas da segunte forma:<br><br>1 ~ 12: Fáceis<br>13 ~ 20: Médias<br>21 ~ 25: Difíceis</h4>
        </form>
           <h4 id="bottom">Clique <a href="admmenuredirect.php">aqui</a> para voltar ao Menu.</h4>
	</body>
</html>