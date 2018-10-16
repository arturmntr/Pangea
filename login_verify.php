<?php
//session_start();
if(!$_SESSION['usuario']){
	header("Location: Home.php");
	exit();
}
?>