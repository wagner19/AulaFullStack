<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

	<input id="fruta" type="text" value="laranja">

	<button onclick="checarFruta()">Checar Fruta</button>

	<p id="resultado"></p>

	<script>
		 function checarFruta(){

			var texto;
			var frutas = document.getElementById("fruta").value;

			switch(frutas) {

				case "banana":
				 texto = "Temos banana!";
				 break;

				case "laranja":
				 texto = "Temos laranja!.";
				 break;

				case "maça":
				texto = "Temos maça!";
				break;

				default:
				 texto = "Nós não temos esta fruta";
				 break;

			}

			document.getElementById("resultado").innerHTML = texto;
		}

</script>

</body>
</html>