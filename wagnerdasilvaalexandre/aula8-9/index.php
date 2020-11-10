<!DOCTYPE html>:
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Adventure</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<nav>
		<div class="logo">Logo</div>
		<div class="menu">menu</div>
		<a href="#" class="menu-link">Contato</a>
		<a href="#" class="menu-link">Serviços</a>
		<a href="#" class="menu-link">Quem Somos</a>
		<a href="#" class="menu-link">Home</a>
	</nav>

	<main>
		<section class="banner">
			<h2>Aventura</h2>
			<p>A avantura começa agora...</p>
		</section>

		<section class="servicos">

			<div class="container">

				<h2>serviços</h2>

				<?php

					for($i=0; $i<3; $i++){

				?>
				
					<div class="column column-3">
						<div class="imagem" id="imagem<?php echo $i; ?>"></div>
						<p>Aventura</p>
					</div>

				<?php

			        }

			    ?>

			</div>
		</section>

		<section class="quem-somos">
			
			<div class="container">
				
				<h2>quem somos</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

		</section>

		<footer>
			
			<div class="container">
				
				<p>desenvolvido por wagner alexandre - <?php echo date('d/m/y'); ?></p>
			</div>
		</footer>

	</main>

</body>
</html>