<?php
$servername = "localhost";
$username = "root";
$dbpassword = "root";
$dbname = "espmquiz";
$conn = new mysqli($servername, $username, $dbpassword, $dbname);
$nome = $_POST['nome'];
$sobrenome	=	$_POST['sobrenome'];
$login	=	$_POST['loginnew'];
$password	=	$_POST['passwordnew'];
 if ($conn->connect_error) {
     die("Falha ao se conectar ao banco de dados: " . $conn->connect_error);
} 
$sql = "SELECT id, nome, sobrenome, points, FIND_IN_SET( points, (SELECT GROUP_CONCAT( score ORDER BY points DESC ) FROM points) AS rank FROM points";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao realizar cadastro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
SELECT id, name, score, FIND_IN_SET( score, (
SELECT GROUP_CONCAT( score
ORDER BY score DESC ) 
FROM scores )
) AS rank
FROM scores
