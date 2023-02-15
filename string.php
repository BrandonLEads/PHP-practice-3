<!DOCTYPE html>
<html>
<head>
<title>Strings</title>
</head>
<body>

<h1>*** Brandon Eads ****</h1>
<p>Strings Practice</p>

<?php

$phrase=The truth is rarely pure;
$author=Oscar Wilde;
echo $phrase;
echo "<p>It is often said that <q>$phrase</q> </p>";
$phrase =$phrase.'and never simple';
echo "<p><q>$phrase</q><cite>$author</cite></p>";
?>   
 
</body>
</html>