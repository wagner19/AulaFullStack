<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>
	
	<div style="padding:20px;">
		<p style="background:#FFF;margin:20px">Olá mundo</p>
	</div>

	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
			$('p').parant().css(" background-color","black")
		})

	});
	</script>

</body>
</html>