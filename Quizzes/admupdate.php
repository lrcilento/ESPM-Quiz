	<?php 
	session_start();
	if($_SESSION['admperm'] == "adm") { $perm = "adm"; } elseif($_SESSION['admperm'] == "cord") { $perm = "cord"; } elseif($_SESSION['admperm'] == "prof") { $perm = "prof"; } else { session_destroy();header('location:../adm.php'); }
include 'conn.php';
$qname = $_SESSION['qnametest'];
$righta = $_SESSION['rightatest'];
$wrong1 = $_SESSION['wrong1test'];
$wrong2 = $_SESSION['wrong2test'];
$wrong3 = $_SESSION['wrong3test'];
$wrong4 = $_SESSION['wrong4test'];
$id = $_SESSION['qid'];
$admdef = $_SESSION['admdefq'];
mysql_query("UPDATE questions SET qname='$qname' WHERE id='$id'");
mysql_query("UPDATE questions SET righta='$righta' WHERE id='$id'");
mysql_query("UPDATE questions SET wrong1='$wrong1' WHERE id='$id'");
mysql_query("UPDATE questions SET wrong2='$wrong2' WHERE id='$id'");
mysql_query("UPDATE questions SET wrong3='$wrong3' WHERE id='$id'");
mysql_query("UPDATE questions SET wrong4='$wrong4' WHERE id='$id'");
mysql_query("UPDATE questions SET criador='$admdef' WHERE id='$id'");
mysql_close($conn);
    echo"<script language='javascript' type='text/javascript'>alert('Questão atualizada com sucesso!');window.location.href='admchange.php';</script>";
                    die();				 
 ?> 