<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>
	

	<p>Olá mundo</p>
	<p id="teste1">O Jquery é divertido</p>
	<p id="teste2">O Jquery é uma biblioteca de javascript</p>


	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('button').click(function(){
			$('#teste1 , #teste2').remove()
		})


	});
	</script>

</body>
</html>