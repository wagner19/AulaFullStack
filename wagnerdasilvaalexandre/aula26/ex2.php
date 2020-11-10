<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>

	<ol>
	  <li>item</li>
	  <li>item</li>
	</ol>

	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('button').click(function(){
			$('ol').prepend('<li>novo item</li>')
		})

	});
	</script>

</body>
</html>