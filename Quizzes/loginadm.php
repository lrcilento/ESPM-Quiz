	<?php 
	session_start();
	include 'conn.php';
				    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
	$key	=	$_POST['password'];
					$passget = mysql_query("SELECT password FROM adm WHERE login = '$login'", $conn) or die("Erro ao Selecionar");
        if (isset($entrar)) {
											                if (mysql_num_rows($passget)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login incorreto');window.location.href='../index.php';</script>";
                    die();
                }else{
					while($row = mysql_fetch_array($passget)){
					$_SESSION['passwordselected'] = $row['password'];
					$passwordselected = $_SESSION['passwordselected'];
				$password = crypt($key, $passwordselected);}}
			if (empty($_POST['login']) || empty($_POST['password'])) {
$error = "Login e/ou senha incorretos";
}
                     
            $verifica = mysql_query("SELECT * FROM adm WHERE login = '$login' AND password = '$password'", $conn) or die("Erro ao selecionar");
			$login = stripslashes($login);
$password = stripslashes($password);
$login = mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../adm.php';</script>";
                    die();
                }else{
					while($row = mysql_fetch_array($verifica)){
					$_SESSION['admlogin'] =$login; 
					$_SESSION['admpassword'] = $row['password'];
					$_SESSION['admnome'] = $row['nome'];
					$_SESSION['admsobrenome'] = $row['sobrenome'];
					$_SESSION['admperm'] = $row['perm'];
					echo"<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso!');window.location.href='admmenuredirect.php';</script>";
					}}

				mysql_close($connect);
        }
?>
