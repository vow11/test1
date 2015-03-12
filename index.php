<?php
//test.
echo '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/template.css" />
</head>
<body>';
include_once 'content.php';
mysql_close($dbconnect);
echo '</body>
</html>';
