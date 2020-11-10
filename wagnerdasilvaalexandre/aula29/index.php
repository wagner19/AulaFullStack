<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<!-- Exemplo de botão danger dividido -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Ação</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Alguma ação</a>
    <a class="dropdown-item" href="#">Outra ação</a>
    <a class="dropdown-item" href="#">Alguma coisa aqui</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Link separado</a>
  </div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Opções</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Escolher...</option>
    <option value="1">Um</option>
    <option value="2">Dois</option>
    <option value="3">Três</option>
  </select>
</div>

<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Escolher...</option>
    <option value="1">Um</option>
    <option value="2">Dois</option>
    <option value="3">Três</option>
  </select>
  <div class="input-group-append">
    <label class="input-group-text" for="inputGroupSelect02">Opções</label>
  </div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button">Botão</button>
  </div>
  <select class="custom-select" id="inputGroupSelect03" aria-label="Exemplo de select com botão addon">
    <option selected>Escolher...</option>
    <option value="1">Um</option>
    <option value="2">Dois</option>
    <option value="3">Três</option>
  </select>
</div>

<div class="input-group">
  <select class="custom-select" id="inputGroupSelect04" aria-label="Exemplo de select com botão addon">
    <option selected>Escolher...</option>
    <option value="1">Um</option>
    <option value="2">Dois</option>
    <option value="3">Três</option>
  </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Botão</button>
  </div>
</div>

	<script type="text/javascript" src="assets/libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript " src="assets/libs/Popper.js"></script>
	<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.js"></script>

</body>
</html>