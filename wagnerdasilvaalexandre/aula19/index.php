<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>aula 19</title>

	<script type="text/javascript">

		//funão
		function soma (a,b){
			return a + b;
		}

		//função
		// switch(new Date().getDay()){

		// 	case 0:
		// 	dia = 'domingo';
		// 	break;

		// 	case 1:
		// 	dia = 'segunda';
		// 	break;

		// 	case 2:
		// 	dia = 'terça';
		// 	break;

		// 	case 3:
		// 	dia = 'quarta';
		// 	break;

		// 	case 4:
		// 	dia = 'quinta';
		// 	break;

		// 	case 5:
		// 	dia = 'sexta';
		// 	break;

		// 	case 6:
		// 	dia = 'sábado';
		// 	break;
		// }

		// alert(dia);

		//for
		// var carro = ['porche', 'ferrari', 'bmw','fusca','xj'];
		// for(i=0; i<carro.length; i++){
		// 	alert(carro[i]);
		// }

		//while
		//var i = 0
		//while(i<10){
			//alert(i);
		}


	</script>
</head>
<body>

	<!-- <button onclick="document.getElementById('demo').innerHTML = Date ()">que dia é Hoje</button> -->
	<!-- <button onclick="this.innerHTML = Date ()">que dia é Hoje</button> -->
	<button onclick="this.innerHTML = soma (5000, 5000)">que dia é Hoje</button>

	<div id="demo"></div>

</body>
</html>