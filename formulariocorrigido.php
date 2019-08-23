<!DOCTYPE html>

<html>
	
	<head>
		<title>ATIVIDADE 1 DE WEB 2 </title>
		<meta charset="utf-8"/>

		<script type="text/javascript">
			function verificarIdade(){
				var nomeNOJS= document.getElementById('nomeID').value;
				 if(idadeJS < 18){
					 document.getElementById('msgIdade').innerHTML = "Negada a Entrada";
					//alert("maior"); 
				 }
				//alert(nomeNOJS);
			}
			
		</script>

	</head>

	<body>
		
		<form action="formulariocorrigido.php" method="POST">
			<label>Nome: </label><input type="text" onblur="saidaNome();" name="nome" id="nomeID"/>

			<label>Idade: </label><input type="text" name="idade"  name="nome" id="nomeID" 
              onblur="verificarIdade();"/>
			  <p id="msgIdade">  </p>
			<input type="submit" value="Salvar"/>
		</form>

		<?php

			if(! empty($_POST)){ //requisita o post, verifica se o post esta vazio.
				echo $_POST['nome'];
			}
			
		?>

	</body>
</html>
