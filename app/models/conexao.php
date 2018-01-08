<?php
$host = "localhost";
$user = "root";
$pass = "Mdl@2017..";
$banco = "valesilicio";

$mysqli = new mysqli($host, $user, $pass, $banco);

if($mysqli->connect_errno)
	echo  "Falha na conexão:(".$mysqli->connect_errno.") ".$mysqli->connect_errno;

$mysqli->set_charset("utf8");

$server = $_SERVER;

$base_url = "{$server['REQUEST_SCHEME']}://{$server['HTTP_HOST']}".dirname($server['PHP_SELF'])."/";
compact('base_url');