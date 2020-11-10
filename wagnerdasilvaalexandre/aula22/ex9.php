<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Jquery</title>
	</head>
	<body>

		<span>Crie 2 eventos para este elemento</span>

		<script type="text/javascript" src="assets/libs/Jquery-3.4.1.min.js"></script>
		<script>
		$(document).ready(function(){
		    $("span").on({
		       mouseenter: function(){
		       	$(this).css('background','green');
		       },
		       mouseout: function(){
		       	$(this).css('background','red');
		       }
		    });
		});
		</script>

	</body>
</html> 