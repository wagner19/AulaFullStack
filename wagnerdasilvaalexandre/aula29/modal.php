<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>modal</title>
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLongoExemplo">
  Abrir modal de demonstração
</button>

	<!-- Modal -->
	<div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
	  <div class="modal-dialog moda-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="TituloModalLongoExemplo">Título do modal</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
	        <button type="button" class="btn btn-primary">Salvar mudanças</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript " src="assets/libs/Popper.js"></script>
	<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.js"></script>

</body>
</html>