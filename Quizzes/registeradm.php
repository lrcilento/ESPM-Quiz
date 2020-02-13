<?php
session_start();
include 'conn.php';
$nome = $_POST['nome'];
$sobrenome	=	$_POST['sobrenome'];
$login	=	$_POST['loginnew'];
$hash	=	$_POST['passwordnew'];
$salt = openssl_random_pseudo_bytes(22);
$salt = '$2a$%13$' . strtr(base64_encode($salt), array('_' => '.', '~' => '/'));
$password = crypt($hash, $salt);
$perm	=	$_POST['perm'];
 if (!$conn) {
     die("Falha ao se conectar ao banco de dados");
} 
$sql = "INSERT INTO adm (nome, sobrenome, login, password, perm) VALUES ('$nome', '$sobrenome', '$login', '$password', '$perm')";
$result = mysql_query("SELECT * FROM adm WHERE login = '$login';");
if(!$result)
{
    die(mysql_error());
}
if(mysql_num_rows($result) > 0)
{
    die("<script language='javascript' type='text/javascript'>alert('Usuário já registrado!');window.location.href='../index.php';</script>");
}
if (!mysql_query($sql,$conn)) {
	die(mysql_error());
					}     
            $verifica = mysql_query("SELECT * FROM adm WHERE login = '$login' AND password = '$password'", $conn) or die("Erro ao selecionar");
			$login = stripslashes($login);
$password = stripslashes($password);
$login = mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);
					while($row = mysql_fetch_array($verifica)){
					$_SESSION['admlogin'] =$login; 
					$_SESSION['admnome'] = $row['nome'];
					$_SESSION['admsobrenome'] = $row['sobrenome']; 
				mysql_close($conn);
    echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');window.location.href='admpanel.php';</script>";
                    die();
				 }

 ?> 