<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Jquery</title>
	</head>
	<body>

		<span>Passe o mouse para mudar a cor</span>

		<script type="text/javascript" src="assets/libs/Jquery-3.4.1.min.js"></script>
		<script>
		$(document).ready(function(){
		   $("span").hover(function(){
		        $(this).css('background','red');
		    });
		});
		</script>

	</body>
</html>