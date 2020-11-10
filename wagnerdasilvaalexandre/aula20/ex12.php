<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style type="text/css">
     label{
      width: 100%;
      padding: 5px;
     }
     input {
      padding: 5px;
     }
     div {
      margin-bottom: 10px;
     }
  </style>
</head>
<body>

  <form name="formularioCadastro" action="/action_page.php" onsubmit="return validateForm()" method="post">

    <label>Name:<label>
    <div><input type="text" name="nome" /></div>

    <label>Idade:<label>
    <div><input type="text" name="idade" /></div>

    <label>E-mail:<label>
    <div><input type="text" name="email" /></div>

    <label>Telefone:<label>
    <div><input type="text" name="telefone" /></div>

    <input type="submit" value="Cadastrar">

  </form>

  <script>
     function validateForm() {

         var idade = document.forms["formularioCadastro"]["idade"].value;

         if(idade<18){

          alert("você é menor de 18")
          return false;
         }

     }
  </script>

</body>
</html>