<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<!-- <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip na parte superior">
	    Tooltip na parte superior
	</button>
	<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip na direita">
	    Tooltip na direita
	</button>
		<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip na parte inferior">
	     Tooltip na parte inferior
	</button>
	<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="	left" title="Tooltip na esquerda">
	 	 Tooltip na esquerda
	</button> -->

	<div class="mt-5 ml-5 mr-5">
		<div class="progress bg-danger">
	  		<div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript " src="assets/libs/Popper.js"></script>
	<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.js"></script>

	 <script type="text/javascript">
		$(document).ready(function(){
			//$('[data-toggle="tooltip"]').tooltip()

			var download = 0;
			setInterval(function(){
				download += 1;
				if (download <=100) {
				$('.progress-bar').css('width',download + '%');
				}
				if(download == 100){
					alert("ocorreu um erro tente novamente")
				}
			},100)
		})
	 </script> 

</body>
</html>