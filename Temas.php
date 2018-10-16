<?php
session_start();
include('login_verify.php');
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<title>Estudo</title>
	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="jquery.mask.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	jQuery(function($) {
		  $('#cpf').mask('999.999.999-99',{});
	   });
	</script>
</head>
<body>
	<div class="barra">
		<table class="itens">
			<tr>
				<th class="item">Pangea</th>
				<th class="item">Estudos</th> 
				<th class="dropitem" align="center">
					<div>Certificados</div>
					<div class="drop" align="center">
						<a href="#">Insert</a>
						<a href="#">Text</a>
						<a href="#">Right Here</a>
					 </div>
				</th>
				<th class="item">About</th>
				<th  align="right" style="width:100%"></th>
				<th><div class="item ite login" id="item_tologin" align="right"><?php echo $_SESSION['usuario'];?>
				</th>
			</tr>
		</table>
	</div>
	<div class="overlay dark" id="overlay_dark" onclick="hideOverlay()">
	</div>
	<div class="top_menu"id="menu_login" align="center">
		<div class="top_texto">Conecte-se!</div>
		<form action="login.php" class="menu" align="center" method="post">
			<div class="linha"></div>
			<!--input class="entre" id="cpf" placeholder=" " required onchange="valido(this)" onkeyup="valido(this)"
					pattern="\d{3}.\d{3}.\d{3}-\d{2}">
			<label class="dentre">CPF</label-->
			<input class="entre" id="entre_user" name="entre_user" minlength="2" required onchange="valido(this)" placeholder=" ">
			<label class="dentre">Username</label>
			<br>
			<input class="entre" id="entre_pass" name="entre_pass" type="password" minlength="2" required onchange="valido(this)" placeholder=" ">
			<label class="dentre">Senha</label>
			<br>
			<div style="margin:auto;margin-top: 1em;width: 280px" align="left">
			<a class="link error" id="user_not_found">Usuário ou senha incorretos.</a>
			<a class="link">Esqueci minha senha</a></div><br>
			<!-- <button class="botao">Entrar</button> -->
			<!--div class="caixa_button minimum white" onclick="sendLogin();">Login</div-->
			<button type="submit" class="caixa_button minimum white">Login</button>
			<div class="caixa_button minimum white">Cadastrar-se</div>
		</form>
	</div>
	<div class="caixa studying">
		<!-- <div class="caixa_holder">
		<table class="caixa_image sub_page">
			<tbody>
				<tr class="caixa_gradient">
					<td class="caixa_title"> </td>
				</tr>
			</tbody>
		</table>
		</div> -->
		
		<div class="caixa_study temas">
			<div class="caixa_study_temas">
				<div class="caixa_temas_title">Estudos Recentes</div>
				<div class="caixa_temas_recent"></div>
				<div class="caixa_temas_subtitle">Progresso</div>
				<div class="caixa_temas_progress">
					<div class="caixa_temas_progressed"></div>
				</div>
					<ul class="tema_itens">
						<?php 
						include('conexao.php');
						$consulta_login  = "select * from theme";
						$result = mysqli_query( $conn, $consulta_login ) or die("Bad Query: $consulta_login");while($row = $result->fetch_assoc()) {
								//echo $row["Name"];
						?>
						<li class="tema_item">
							<table class="tema_caixa">
								<tbody>
									<tr>
										<td class="tema_img">
											<div class="img_tema"></div>
										</td>
										<td class="tema_text">
											<div class="tema_title"><?php echo $row["ThemeName"]; ?></div>
											<div class="tema_description"><?php echo $row["themeDescription"]; ?></div>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<?php } ?>
					</ul>
			</div>
		</div>
	</div>
		<table class="caixa_about">
			<tbody>
				<tr>
					<td class="about_item">
						<table class="about_column">
							<thead>
								<tr><td>About</td></tr>
							</thead>
							<tbody>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
							</tbody>
						</table>
					</td>
					<td class="about_item">
						<table class="about_column">
							<thead>
								<tr><td>Placeholder</td></tr>
							</thead>
							<tbody>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
							</tbody>
						</table>
					</td>
					<td class="about_item">
						<table class="about_column">
							<thead>
								<tr><td>Even More</td></tr>
							</thead>
							<tbody>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
								<tr><td>Hey</td></tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="caixa_about next">
			<tr>
				<td class="about_text left" colspan=1>Expandindo Fronteiras Ampliando Horizontes.</td>
				<td class="about_text" colspan=1>2019 © Todos os Direitos Reservados, um dia </td>
			</tr>
		</table>
	<div class="obs_tab"></div>
	<script type="text/javascript">
		function valido(e) {
			for( var i = 0; i < document.getElementsByClassName("entre").length; i++ ){
				if (document.getElementsByClassName("entre")[i].checkValidity() == false) {
					document.getElementById("menu").style.borderTop = "20px solid #ff3366";
					document.getElementById("menu").style.background="linear-gradient(rgba( 255, 50, 101, 1 ),rgba( 255, 50, 101, 1 )) top no-repeat";
					document.getElementById("menu").style.backgroundSize = "100% 2px";
					document.getElementById("menu").style.backgroundColor = "#fefefe";
					break;
				}
				else {
					document.getElementById("menu").style.borderTop = "20px solid #66eeaa";
					document.getElementById("menu").style.background="linear-gradient(rgba( 101, 238, 170, 1 ),rgba( 101, 238, 170, 1 )) top no-repeat";
					document.getElementById("menu").style.backgroundSize = "0% 2px";
					document.getElementById("menu").style.backgroundColor = "#fefefe";
				}
			}
		}
	</script>
	<script>
		var scrolled = false;
		window.onscroll = function (){ 
				"use strict";
		var bar  = document.getElementsByClassName('barra')[0];
		var drop = document.getElementsByClassName('drop')[0];
		var logn = document.getElementsByClassName('top_menu')[0];
				if (document.body.scrollTop > 520 ) {
						bar.classList.add("scrolled");
						drop.classList.add("scrolled");
						logn.classList.add("scrolled");
						//bar.style.transition = "all .2s";
						//pic.classList.remove("scrolled_pic");
						//box.classList.add("scrolled_box");
				} 
				else {
						bar.classList.remove("scrolled");
						drop.classList.remove("scrolled");
						logn.classList.remove("scrolled");
						//bar.style.transition = "all .1s";
						//pic.classList.add("scrolled_pic");
						//box.classList.remove("scrolled_box");
				}
		};
	</script>
	<script>
		$('.login').click ( function addObs(){
			document.getElementById("overlay_dark").style.display = "block";
			document.getElementById("menu_login").style.display = "block";
		} );
		function hideOverlay(){
			document.getElementById("overlay_dark").style.display = "none";
			document.getElementById("menu_login").style.display = "none";
		}
	</script>
	<script type="text/javascript" src="who.js"></script>
</body>
</html>