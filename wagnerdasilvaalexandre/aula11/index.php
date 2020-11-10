<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<form action="contato.php" method="POST">
			<label>nome</label>
			<input type="text" name="nome" placeholder="nome">
			<br />
			<label>telefone</label>
			<input type="text" name="telefone" maxlength="11">
			<br/>
			<label>CPF</label>
			<input type="text" name="CPF">
			<br>
			<input type="radio" name="sexo" value="masculino">masculino
			
			<input type="radio" name="sexo" value="feminino">feminino
			
			<input type="radio" name="sexo" value="outro">outro
			<br>

			<label>irmãos</label>
			<select name="irmaos">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			<label>fale sobre você</label>
			<textarea name="descricao"></textarea>
			<br>

			<label>quais meios de transporte você utiliza</label>
			<br>
			<input type="checkbox" name="carro">carro
			
			<input type="checkbox" name="bicicleta">bicicleta
			
			<input type="checkbox" name="publico">publico
			<br>

			<center>
			<input type="submit" name="enviar">
			</center>
			
		</form>

	</body>
</html>