<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

<p id="resultado"></p>

<script>
var text = "";
var food = ["Pizza", "Feijão", "Tacos", "Peixe", "Frango"];

for ( i=0; i<food.length; i++) {
    text += "Eu amo " + food[i] + "<br>";

}

document.getElementById("resultado").innerHTML = text;
</script>

</body>
</html>