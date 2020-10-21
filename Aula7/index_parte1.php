<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 7</title>
</head>
<body>

<!-- 
	<p class="array"></p>
	<p class="objeto"></p> -->

	<button onclick="document.getElementById('demo').innerHTML = Date()">Que dia é hoje (Por Id)</button>

	<p id="demo"></p>

	<button onclick="this.innerHTML = Date()">Que dia é hoje (Alteração do próprio elemento)</button>
	
	<br>
	<br>

	<button onclick="this.innerHTML = soma(10, 5)">Soma 10 + 6</button>

	<br>
	<br>

	<button onclick="this.innerHTML = escolherDia()">Que dia da semana é hoje?</button>

	<br>
	<br>

	<button onclick="imprimirPessoasFor()">Imprimir pessoas (for/console)</button>

	<br>
	<br>

	<button onclick="imprimirPessoasWhile()">Imprimir pessoas (while/console)</button>

	<br>
	<br>

	<button onclick="imprimirWhile()">Imprimir 1 a 10 (while/console)</button>

	<p id="while"></p>

</body>
	
	<script type="text/javascript" src="assets/js/script.js"></script>
	
</html>