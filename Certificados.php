<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<title>Certificados</title>
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
				<th><div class="item ite login" align="right">Sign In</div></th>
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
			<a class="link">Esqueci minha senha</a></div><br>
			<!-- <button class="botao">Entrar</button> -->
			<div class="caixa_button minimum white" onclick="hideOverlay()">Login</div>
			<div class="caixa_button minimum white">Cadastrar-se</div>
		</form>
	</div>
	<div class="caixa">
		<div class="caixa_holder">
		<table class="caixa_image sub_page">
			<tbody>
				<tr class="caixa_gradient">
					<td class="caixa_title">P A N G E A</td>
					<!--td class="half_text">
						<div class="caixa_button white notwrap ">Começar Agora</div>
					</td-->
				</tr>
				<tr>
					<td class="caixa_text" colspan="2">Experiencie uma nova língua por completo</td>
				</tr>
			</tbody>
		</table>
		</div>
		<div class="full_alpha">
			<table>
				<tbody>
					<tr>
						<td>Insert Text</td>
						<td>Insert Text</td>
						<td>Insert Text</td>
						<td>Insert Text</td>
					</tr>
					<tr>
						<td class="barra_status"><i class="material-icons">explore</i></td>
						<td class="barra_status"><i class="material-icons">question_answer</i></td>
						<td class="barra_status"><i class="material-icons">school</i></td>
						<td class="barra_status"><i class="material-icons">code</i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<table class="caixa_half sand">
			<tbody>
				<tr>
					<td class="half_image plus">
						<table style="margin:auto">
							<tr><td class="half_title">Titulo</td></tr>
							<tr><td class="half_text max">Praesent non varius quam, id accumsan urna. Quisque sit amet lacus eu eros posuere consectetur. Praesent rutrum, ex eu rhoncus congue, neque enim dictum massa, ac dignissim mi nisi a ligula!</td></tr>
						</table>
					</td>
					<td class="half_caixa dark">
							<table style="margin:auto; height:100%;">
							<tr><td class="half_title">Certificados</td></tr>
							<tr><td class="half_line"></td></tr>
							<tr><td class="half_text">Nullam at metus volutpat felis dictum scelerisque. Mauris cursus eros arcu, id cursus nibh dapibus ut. Vivamus eget nisi quis felis facilisis rutrum eget ac nulla. Aliquam erat volutpat. Cras dignissim efficitur magna, nec ultricies massa accumsan eget. Mauris elementum eu turpis ut elementum. Suspendisse potenti.</td></tr>
							<td class="full_empty"></td>
							<tr><td class="half_text">
								<div class="caixa_button white">Placeholder Button</div>
							</td></tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="caixa_half blure">
			<tbody>
				<tr>
					<td class="half_caixa white">
							<table style="margin:auto; height:100%;">
							<tr><td class="half_title dark">Certificados</td></tr>
							<tr><td class="half_line dark"></td></tr>
							<tr><td class="half_text dark">Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Aenean aliquam molestie leo, vitae iaculis nisl.</td></tr>
							<td class="full_empty"></td>
							<tr><td class="half_text dark">
								<div class="caixa_button dark">Mussum Ipsum.</div>
							</td></tr>
						</table>
					</td>
					<td class="half_image">
						<table style="margin:auto">
							<tr><td class="half_title">Titulo</td></tr>
							<tr><td class="half_text max">Mauris eu fringilla metus, nec pharetra turpis. Curabitur accumsan facilisis tellus, vitae porta mauris dictum in. Nunc elementum, nunc quis mattis faucibus, nunc lorem mollis ex, eu tempus dolor ante lobortis tellus. Cras luctus condimentum ultricies. Ut at vulputate tellus. Suspendisse tristique, metus sit amet sagittis tincidunt, sem est tincidunt nibh, eu ultrices velit orci pretium tortor. Praesent sem risus, pretium et consequat id, ullamcorper quis justo. Pellentesque vulputate dolor mi, sit amet aliquet arcu malesuada sed. Donec feugiat, urna eu rhoncus egestas, massa elit placerat nisl, ac vehicula risus orci ac lorem.</td></tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		
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
</body>
</html>