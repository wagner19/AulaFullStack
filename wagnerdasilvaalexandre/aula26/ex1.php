<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>

	<p>O Jquery é divertido?</p>

	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		$("button").click(function(){
			$("p").append("sim");
		})

	});
	</script>

</body>
</html>