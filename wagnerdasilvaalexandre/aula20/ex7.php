<!DOCTYPE html>
<head>
	<meta charset="utf-8">
</head>
<html>
<body>

	<input id="frutas" type="text" value="Maçã">

	<button onclick="checarFruta()">Checar Fruta</button>

	<p id="resultado"></p>

	<script>

		function checarFruta() {

		  var texto;
		  var fruta = document.getElementById("frutas").value;

		  switch(fruta) {

		    case "Banana":
		      texto = "Temos Banana!";
		      break;

		    case "Laranja":
		      texto = "Temos Laranja!.";
		      break;

		    case "Maçã":
		      texto = "temos Maçã!";
		      break;

		    default:
		      texto = "Não temos " + fruta;
		  }

		  document.getElementById("resultado").innerHTML = texto;
		}

	</script>

</body>
</html>