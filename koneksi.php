<?php
try {
	$con = new PDO("mysql:host=127.0.0.1;dbname=pdo_demo", 'root', '');
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExceptioon $ex) {
	die("Connection Failed! :" . $ex->getMessage());
	
}
?>
	