<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
require('./vendor/autoload.php');
use EdgarSaavedra\Basics;
$handle = new Basics\Forms();
print $handle->getReqVars();
$handle->checkGender();
?>
</body>
</html>