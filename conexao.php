<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "projetogo";

global $pdo;

try {
	$pdo = new PDO("mysql:dbname=".$banco.";host=".$localhost, $user, $passw);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo("erro". $e->getMessage());
	exit;
}




  ?>