<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 5 - formulario</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<form action="pagina.php" target="_bl">
		
		<!-- <fieldset>
		
			<legend>primeiro formulário</legend> -->

			<div>

				<label>nome:</label>
				<input type="text" name="nome" maxlength="10" placeholder="imforme seu nome">

				<label>sobrenome:</label>
				<input type="text" name="sobrenome" value="da silva" readonly>

				<label>idade:</label>
				<input type="number" name="idade">
			</div>

			<div>
				<input type="radio" name="sexo" value="fam">feminino
				<input type="radio" name="sexo" value="masc">masculino
				<input type="radio" name="sexo" value="out">outro
			</div>

			<div>
				<label>quantidades de carros</label>
				<select name="qtd_carros">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3" selected>3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>

			<div>
				<textarea name="obs" rows="10"></textarea>
			</div>

			<div>
				<label>selecione as opções</label>
				<input type="checkbox" name="option" value="bicicleta">bicicleta
				<input type="checkbox" name="option" value="carro" checked>carro
				<input type="checkbox" name="option" value="moto">moto
			</div>

			<button type="submit">Enviar Resposta</button>
<!-- 			<input type="submit" name="Enviar"> -->
<!-- 		</fieldset> -->

	</form>

</body>
</html>