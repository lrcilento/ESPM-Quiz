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


 if (!$conn) {
     die("Falha ao se conectar ao banco de dados");
} 
$sql = "INSERT INTO users (nome, sobrenome, login, password) VALUES ('$nome', '$sobrenome', '$login', '$password')";
$result = mysql_query("SELECT * FROM users WHERE login = '$login';");
if(!$result)
{
    die(mysql_error());
}
if(mysql_num_rows($result) > 0)
{
    die("<script language='javascript' type='text/javascript'>alert('Usuário já registrado!');window.location.href='../index.php';</script>");
}
if (!mysql_query($sql,$conn)) {
	die ('Erro');
					}     
            $verifica = mysql_query("SELECT * FROM users WHERE login = '$login' AND password = '$password'", $conn) or die("Erro ao selecionar");
			$login = stripslashes($login);
$password = stripslashes($password);
$login = mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);
					while($row = mysql_fetch_array($verifica)){
					$_SESSION['login'] =$login; 
					$_SESSION['password'] = $row['password'];
					$_SESSION['acpoints'] = $row['acpoints'];
										$_SESSION['tech1points'] = $row['tech1points'];$_SESSION['tech2points'] = $row['tech2points'];$_SESSION['tech3points'] = $row['tech3points'];$_SESSION['tech4points'] = $row['tech4points'];$_SESSION['tech5points'] = $row['tech5points'];$_SESSION['tech6points'] = $row['tech6points'];$_SESSION['tech7points'] = $row['tech7points'];$_SESSION['tech8points'] = $row['tech8points'];
					$_SESSION['jornalismo1points'] = $row['jornalismo1points'];$_SESSION['jornalismo2points'] = $row['jornalismo2points'];$_SESSION['jornalismo3points'] = $row['jornalismo3points'];$_SESSION['jornalismo4points'] = $row['jornalismo4points'];$_SESSION['jornalismo5points'] = $row['jornalismo5points'];$_SESSION['jornalismo6points'] = $row['jornalismo6points'];$_SESSION['jornalismo7points'] = $row['jornalismo7points'];$_SESSION['jornalismo8points'] = $row['jornalismo8points'];
					$_SESSION['pp1points'] = $row['pp1points'];$_SESSION['pp2points'] = $row['pp2points'];$_SESSION['pp3points'] = $row['pp3points'];$_SESSION['pp4points'] = $row['pp4points'];$_SESSION['pp5points'] = $row['pp5points'];$_SESSION['pp6points'] = $row['pp6points'];$_SESSION['pp7points'] = $row['pp7points'];$_SESSION['pp8points'] = $row['pp8points'];
					$_SESSION['adm1points'] = $row['adm1points'];$_SESSION['adm2points'] = $row['adm2points'];$_SESSION['adm3points'] = $row['adm3points'];$_SESSION['adm4points'] = $row['adm4points'];$_SESSION['adm5points'] = $row['adm5points'];$_SESSION['adm6points'] = $row['adm6points'];$_SESSION['adm7points'] = $row['adm7points'];$_SESSION['adm8points'] = $row['adm8points'];
					$_SESSION['design1points'] = $row['design1points'];$_SESSION['design2points'] = $row['design2points'];$_SESSION['design3points'] = $row['design3points'];$_SESSION['design4points'] = $row['design4points'];$_SESSION['design5points'] = $row['design5points'];$_SESSION['design6points'] = $row['design6points'];$_SESSION['design7points'] = $row['design7points'];$_SESSION['design8points'] = $row['design8points'];
					$_SESSION['ri1points'] = $row['ri1points'];$_SESSION['ri2points'] = $row['ri2points'];$_SESSION['ri3points'] = $row['ri3points'];$_SESSION['ri4points'] = $row['ri4points'];$_SESSION['ri5points'] = $row['ri5points'];$_SESSION['ri6points'] = $row['ri6points'];$_SESSION['ri7points'] = $row['ri7points'];$_SESSION['ri8points'] = $row['ri8points'];
					$_SESSION['sociais1points'] = $row['sociais1points'];$_SESSION['sociais2points'] = $row['sociais2points'];$_SESSION['sociais3points'] = $row['sociais3points'];$_SESSION['sociais4points'] = $row['sociais4points'];$_SESSION['sociais5points'] = $row['sociais5points'];$_SESSION['sociais6points'] = $row['sociais6points'];$_SESSION['sociais7points'] = $row['sociais7points'];$_SESSION['sociais8points'] = $row['sociais8points'];
					$_SESSION['nome'] = $row['nome'];
					$_SESSION['sobrenome'] = $row['sobrenome']; 
				mysql_close($conn);
    echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');window.location.href='quizhome.php';</script>";
                    die();
				 }

 ?> 