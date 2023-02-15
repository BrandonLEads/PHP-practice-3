<!DOCTYPE html>
<html>
<head>
<title>Logical Operators </title>
</head>
<body>

<h1>*** Brandon Eads ****</h1>
<p>Logical Operators Practice</p>
<?php
$yes = TRUE; $no = FALSE;
$result=($no && $no)?'TRUE':'FALSE';
	echo"No AND No returns $result <br>";
$result=($yes && $no)?'TRUE':'FALSE';
	echo"Yes and No returns: $result <br>";
$result=($yes && $yes)?'TRUE':'FALSE';
	echo"Yes AND Yes returns $result <hr>";

$result=($no || $no)?'TRUE':'FALSE';
	echo"No or No returns $result <br>";
$result=($yes || $no)?'TRUE':'FALSE';
	echo"Yes OR No returns $result <br>";
$result=($yes || $yes)?'TRUE':'FALSE';
	echo "Yes or Yes returns $result <hr>";
$result=(!$yes)?'TRUE':'FALSE';
	echo"NOT Yes returns $result <br>";


?>    
    
</body>
</html>