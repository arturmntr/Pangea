<?php
session_start();
include('conexao.php');

if(empty($_POST['entre_user']) || empty($_POST['entre_pass']) ){
	//header("Location: Home.php");
	//exit();
}

//$usuario = mysql_real_escape_string( $conn, $_POST['entre_user'] );
//$senha = mysql_real_escape_string( $conn, $_POST['entre_pass'] );

$usuario = $_POST['entre_user'];
$senha =$_POST['entre_pass'];

$consulta_login = "select * from user where idUser_name = '{$usuario}' and Password = md5('{$senha}');";
$consulta_login  = "select * from user where idUser_name = '{$usuario}' and Password = '{$senha}'";
//$consulta_login  = "select * from user;";

$result = mysqli_query( $conn, $consulta_login ) or die("Bad Query: $consulta_login");
//$result = $conn->query($consulta_login);

$row = mysqli_num_rows($result);
//echo $row;exit;
/*while($row = $result->fetch_assoc()) {
	echo $row["Name"];
	exit;
}*/

if( $row == 1 ){
	$_SESSION['usuario'] = $usuario;
	header('Location: Temas.php');
	exit();
}else{
	$_SESSION['unauthenticated'] = true;
	header("Location: Home.php");
}


