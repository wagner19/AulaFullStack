<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Jquery</title>
	</head>
	<body>

		<button>Botão</button>

		<script type="text/javascript" src="assets/libs/Jquery-3.4.1.min.js"></script>
		<script>
		$(document).ready(function(){
		    $("button").dblclick(function(){
		    	alert('alerta');
		        
		    });
		});
		</script>

	</body>
</html>
