<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Jquery</title>
	</head>
	<body>
		
		<h1>Título</h1>
		<p class="teste">Parágrafo 1</p>
		<p class="teste">Parágrafo 2</p>

		<script type="text/javascript" src="assets/libs/Jquery-3.4.1.min.js"></script>
		<script>
		$(document).ready(function(){
		    $(".teste").hide();
		});
		</script>

	</body>
</html>