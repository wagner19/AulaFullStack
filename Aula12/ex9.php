<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover na parte superior
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover na direita
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover na parte inferior
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover na esquerda
</button>


	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript " src="assets/libs/Popper.js"></script>
	<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(function () {
	  		$('[data-toggle="popover"]').popover()
		})
	</script>

</body>
</html>