<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>

	<p>Parágrafo</p>

	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
			$('p').fadeOut(1000);
		});


	});
	</script>

</body>
</html>