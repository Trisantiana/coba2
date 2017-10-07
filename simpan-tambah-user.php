<?php
 include_once 'koneksi.php';
 
 $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
 
 if(isset($POST['submit'])){
	 $params = array(
		':username' => $POST['username'],
		':password' => $POST['password'],
	);	
	$sql = "insert into user values(null, :username, :password)";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
	
	header('location:daftar-user.php');
}else{
		die("Missing parameter!");
 }
 