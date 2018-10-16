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
				<th><div class="item ite login" id="item_tologin" align="right">Sign In</div></th>
			</tr>
		</table>
	</div>
	<div class="overlay dark" id="overlay_dark" onclick="hideOverlay()">
	</div>
	<div class="top_menu"id="menu_login" align="center">
		<div class="top_texto">Conecte-se!</div>
		<form class="menu" align="center">
			<div class="linha"></div>
			<!--input class="entre" id="cpf" placeholder=" " required onchange="valido(this)" onkeyup="valido(this)"
					pattern="\d{3}.\d{3}.\d{3}-\d{2}">
			<label class="dentre">CPF</label-->
			<input class="entre" minlength="2"
			required onchange="valido(this)" placeholder=" ">
			<label class="dentre">Username</label>
			<br>
			<input class="entre" type="password" minlength="2"
				required onchange="valido(this)" placeholder=" ">
			<label class="dentre">Senha</label>
			<br>
			<div style="margin:auto;margin-top: 1em;width: 280px" align="left">
			<a class="link error">Usuário ou senha incorretos.</a>
			<a class="link">Esqueci minha senha</a></div><br>
			<!-- <button class="botao">Entrar</button> -->
			<div class="caixa_button minimum white" onclick="hideOverlay()">Login</div>
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
		
		<div class="caixa_study">
				<table style="vertical-align: top;">
					<tbody style="border-collapse: collapse;vertical-align: top;">
						<td style="border-collapse: collapse; padding:0;vertical-align: top;">
							<table class="barra_study">
								<tr><td></td><td class="study_element">Introduction: Basics</td></tr>
								<tr><td class="study_element selected" colspan="2">Listening: The British Accent</td></tr>
								<tr><td></td><td class="study_element">Personal Pronouns</td></tr>
								<tr><td></td><td class="study_element">Family Members</td></tr>
								<tr><td></td><td class="study_element">Initial Verbs</td></tr>
							</table>
						</td>
						<td class="caixa_exercise">
							<table class="barra_exercise">
								<tr>
									<th>Exercício 1</th>
								</tr>
								<tr>
									<td>Este é um exercício de mentira, com objetivo apenas de ser um placeholder, e apenas um exemplo do que seguir. Logo, complete a frase.</td>
								</tr>
								<tr><td>
									<ul class="blank_phrase">
										<li><i class="material-icons in_button">volume_up</i></li>
										<li class="blank_word">First</li>
										<li class="blank_word">Words</li>
										<li class="blank_word">     _____     </li>
										<li class="blank_word">Last</li>
										<li class="blank_word">Words</li>
									</ul>
									</td>
								</tr>
									<td>Escolhas uma das opções abaixo:
										<ul class="barra_options">
											<li><i class="material-icons in_button bland">check_circle_outline</i></li>
											<li class="barra_option">Middle Word</li>
										</ul>
										<ul class="barra_options">
											<li><i class="material-icons in_button bland">check_circle_outline</i></li>
											<li class="barra_option">Palavra do meio</li>
										</ul>
										<ul class="barra_options">
											<li><i class="material-icons in_button bland">check_circle_outline</i></li>
											<li class="barra_option">Opção Extra</li>
										</ul>
										<ul class="barra_options">
											<li><i class="material-icons in_button bland">check_circle_outline</i></li>
											<li class="barra_option">Last Words</li>
										</ul>
									</td>
								</tr>
								<tr style="border-top: 1px solid #11111111;">
									<td>
										<div class="confirm_button">Confirmar Resposta</div>
									</td>
								</tr>
							</table>
						</td>
					</tbody>
				</table>
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
	<script>
	window.document.onload = function(e){ 
		document.getElementById("item_tologin").value = who_name ;
	}
	$(document).ready(function() { document.getElementById("item_tologin").innerHTML = who_name; });
	</script>
</body>
</html>