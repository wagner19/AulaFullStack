<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulário</title>

	<script type="text/javascript">

         function validacaoFormulario() {
		
                var nome  = document.forms['formulario']['nome'].value;
		var sobrenome  = document.forms['formulario']['sobrenome'].value;	
                var idade  = document.forms['formulario']['idade'].value;	
        	
                if (nome == '') {
                	alert('preencha seu nome');
                	return false;
                }
                if (sobrenome == '') {
                	alert('preencha seu sobrenome');
                	return false;
                }	
        	if (idade == '') {
                	alert('preencha seu idade');
                	return false;
                }

                if(idade <='17'){
                        alert('você não 18');
                        return false;
                }

                if (isNaN(idade)) {}

          }
        	

	</script>
</head>
<body>

        <form name="formulario" action="" onsubmit="return validacaoFormulario()">

                nome: <input type="text" name="nome"> <br />
                sobrenome: <input type="text" name="sobrenome"> <br />
                idade: <input type="text" name="idade"> <br />

                <input type="submit" value="enviar" />
                
        </form>
                

</body>
</html>