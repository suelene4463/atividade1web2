<doctype html>
<html>
  <head>
       <meta charset="utf-8"/>
       <title>Formulario.php</title>
	   <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css" />
	   
   </head>

 <body>
     <div class="container">
	      <div class="row">
		   <h1>  Formulario.php</h1>
		  </div>
		  
		 
		  
		   
	  <form action="eventos.php "method="post">
		    <div "class-form-group">
			    <label for="txtClicar">Clicar</label>
			    <input type="button" class="btn btn-primary" value"clicar" onblur."functc()"/><br/><br/>
			    <label for="textEscrever">Escrever</label>
			    <input type="button" class="btn btn-primary" onblur."functc()"/><br/><br/>
			    <label for="txtEnter">Enter</label>
				<input type="button" class="btn btn-primary" onblur."functc()"/><br/><br/>
			    
			    
			          
			    <input type="submit" class="btn btn-primary" value="salvar"/>
			</div>
		   </form>
			
		   
		    </div>
		    </div>
		   
		   
		 <?php
		 
		 if(! empty($_POST)){
			 require_once "clicar.php";
			  require_once "escrever.php";
			  require_once "enter.php";
		      $formulario = new Formulario();
			  
		   $clicar->set ($_POST{"clicar"});
		   $escrever = $_POST{"escrever"}; 
		   $enter = $_POST{"enter"};
		   
		   
		   echo "clicar:".$formulario->getClicar()." e escrever:$escrever";
		    salvar ($formulario);
			function testeOnclick() {
    echo 'Bem vindo ao SOpt';
}

		 }
?>
	
	
    </div>	 
 </body>
</html>
