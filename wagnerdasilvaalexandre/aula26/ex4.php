<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>

	<p>Olá</p>

	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		$("button").click(function(){
			$("p").after(" como está você?");
		})

	});
	</script>

</body>
</html>