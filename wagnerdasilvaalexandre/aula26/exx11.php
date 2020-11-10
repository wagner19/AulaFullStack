<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>

	<style>
	.important {
	    font-weight: bold;
	    font-size: xx-large;
	    background-color: yellow;
	}
	</style>
</head>
<body>
	

	<p class="important">Olá mundo</p>


	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('button').click(function(){
			$('p').removeClass()
		})


	});
	</script>

</body>
</html>