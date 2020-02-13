	<?php 
	session_start();
	if($_SESSION['admperm'] == "adm") { $perm = "adm"; } elseif($_SESSION['admperm'] == "cord") { $perm = "cord"; } elseif($_SESSION['admperm'] == "prof") { $perm = "prof"; } else { session_destroy();header('location:../adm.php'); }
if ($_SESSION['admperm'] == "adm"){
header ('location: admmenu.php');
}
elseif ($_SESSION['admperm'] == "cord"){
header ('location: admmenu1.php');
}
elseif ($_SESSION['admperm'] == "prof"){
header ('location: admmenu2.php');
}
?>