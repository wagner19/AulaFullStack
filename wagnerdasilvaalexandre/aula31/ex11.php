<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<nav aria-label="Navegação de página exemplo">
	   <ul class="pagination">
	    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
	  </ul>
  </nav>

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