<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>

	<a href="http://www.codeuniverse.online">Code Universe</a>

	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
		  alert( $('a').attr('href'));
		});


	});
	</script>

</body>
</html>