<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Jquery</title>
	</head>
	<body>

		<input type="text" placeholder="Pressione  uma tecla" size="40">

		<script type="text/javascript" src="assets/libs/Jquery-3.4.1.min.js"></script>
		<script>
		$(document).ready(function(){
			if(e.keycode == 13)
		    $("input").keypress(function(){
		        alert('teste');
		    });
		});
		</script>

	</body>
</html> 