<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>
	
	<div>
		<p>Olá mundo</p>
		<p>O Jquery é divertido</p>
	</div>

	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
			//$('div p').remove()
			$('div').children('p').remove()
		})

	});
	</script>

</body>
</html>