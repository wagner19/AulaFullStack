<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery</title>
</head>
<body>

	<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>

	<button id="btn">Botão</button>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('div').click(function(){
			$('div').animate({
				right:'300';
			});
		});


	});
	</script>

</body>
</html>