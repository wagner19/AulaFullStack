<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

<p id="resultado"></p>

<script>
  var i = 10;
  while (i > 0) {
      document.getElementById("resultado").innerHTML += i + "<br>";
      i--;
  }
</script>

</body>
</html>