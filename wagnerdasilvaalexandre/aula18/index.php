<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>aula_18</title>
</head>
<body>

	<script type="text/javascript">
		
		var x = 10; //numero inteiro
		var y = 10.2; //numero float
		var i = "joão"; //texto (string)
		var v = true; //bollean (verdadeiro ou falso)
		var c = ['gol', 'chevete', 'maverick']; //arrey (pode ter varios valores dentro)

		var p = {
			nome: 'joão',
			sobrenome: 'pires da silva',
			idade: '15 anos',
		} //variavel objeto

		var j; //indefinido
		var k = ''; //vazia
		var n = null;

		//funções
		function equacao (a, b, c){

			return (a + b) * c;
		}

		console.log(equacao (5, 5, 5));

		console.log(equacao (5, 2, 10));

		function NomeDoAluno(nome){

			return"O nome do aluno é " + nome;
		}

		console.log(NomeDoAluno('joão'));
		console.log(NomeDoAluno('Eduardo'));
		//alert(NomeDoAluno('Eduardo'));
		


		//if(n == null || n == 'undefined' || n == '' ){
			//faz x coisas
		//}else{
			//faz outra coisas
		//}

	</script>

</body>
</html>