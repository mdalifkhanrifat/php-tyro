<?php

$host = 'localhost';
$db = 'pondit_blog';
$user = 'root';
$password = '';

$dsn = "mysql:host=localhost;dbname=pondit_blog;charset=UTF8";

try {
    $conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	if ($conn) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>