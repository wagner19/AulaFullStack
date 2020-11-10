<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<p id="demo" onclick="minhaFuncao()">O resultado será mostrado aqui.</p>

<script>
function minhaFuncao(nome) {
    return "Olá " + nome;
}

document.getElementById('demo').innerHTML = minhaFuncao('joão')

</script>

</body>
</html>