<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabela de Rankings</title>
</head>
<link rel="stylesheet" type="text/css" href="styler.css">
<body>
 <div id="headerdiv">
    <a href="rankings.php"><img src="../images/rankings.png" width="900" height="110" id="espmlogo"></a>
        </div>
        <h1 id="headerr">Design</h1>
        <table id="mother" style="width:100%"><tr><td>
<table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Design - 1</td></tr>
<?php
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY design1points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['design1points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td><td>
<table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Design - 2</td></tr>
<?php
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY design2points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['design2points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td></tr>
<tr><td>
<table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Design - 3</td></tr>
<?php
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY design3points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['design3points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td><td>
<table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Design - 4</td></tr>
<?php
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY design4points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['design4points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td></tr>
<tr><td>
<table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Design - 5</td>
<?php
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY design5points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['design5points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td><td>
<table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Design - 6</td></tr>
<?php
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY design6points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['design6points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td></tr>
<tr><td>
<table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Design - 7</td>
<?php
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY design7points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['design7points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td><td>
<table id="rankingtable1" border="1" bordercolor="A80532"><tr id="bb">
<td colspan="3" id="bb">Design - 8</td></tr>
<?php
$varia=1;
$varia=1;
					include 'conn.php';
$varia = 1;
$max = 6;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users ORDER BY design8points DESC';

mysql_select_db('espmquiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC) and ($varia < $max))
{
	$rnome = $row['nome'];
	$rsobrenome = $row['sobrenome'];
	$rnomedef = ucfirst($rnome);
	$rsobrenomedef = ucfirst($rsobrenome);
	$pointstotal =  $row['design8points'];
	echo "<tr id='bb'><td id='bb'> ". $varia++ . ". </td><td id='bb'>".$rnomedef." ".$rsobrenomedef. "</td><td id='bb'>".$pointstotal."</td></tr><br>";
	} 
mysql_close($conn);
?></table></td></tr>
<h3>Clique <a href="rankings.php">aqui</a> caso queira selecionar outro curso.</h3>
</body>
</html>