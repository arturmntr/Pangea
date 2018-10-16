<?php
//define('HOST', '');
  $servername = "localhost";  //Seleciona o servidor
  $username = "root";  //O nome do lixo
  $password = "1234qwerASDF/"; //A senha do servidor
  $dbname = "pangeawebdb"; //A senha do servidor

  // Cria a porcaria da conexão
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Checa a conexão e pode encerrar esse lixo
  if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
  }

  mysqli_select_db($conn, $dbname);  //Esse lixo aqui seleciona qual o banco a ser usado