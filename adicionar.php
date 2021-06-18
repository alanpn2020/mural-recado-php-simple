<?php
require 'config.php';

if(isset($_POST['name']) && isset($_POST['title']) && empty($_POST['message']) == false) {
	$name = addslashes($_POST['name']);
	$title = addslashes($_POST['title']);
	$message = addslashes($_POST['message']);	

	$sql = "INSERT INTO recado SET name = '$name', title = '$title', message = '$message'";
	$pdo->query($sql);

	header("Location: index.php");
}
?>
