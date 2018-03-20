<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio 1</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-lg-6 col-lg-offset-3">
			<h1 class="text-center">Figuras Geométricas</h1>
			
			<!-- Inicio -->
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			 	<div class="panel panel-default">
			    	<div class="panel-heading" role="tab" id="headingOne">
			      		<h4 class="panel-title">
			        		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			        			<p class="text-center">	Click Aqui para empezar:
			        			<p>Escriba en los campos de texto, los valores de las figuras geometricas que desee.
			        			<p>Si carece de algún valor, no se tomará en cuenta esa figura</p>
			        		</a>
			      		</h4>
			    	</div>
			    	<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			      		<div class="panel-body">
			      			<form class="form-horizontal" action="figura.php" method="post">
						  		<div class="form-group">
						    		
						    		<input type="text" class="form-control" id="base" name="base" placeholder="base del triagulo">
						  		</div>
						  		<div class="form-group">
						    		
						    		<input type="text" class="form-control" id="altura" name="altura" placeholder="altura del triangulo">
						  		</div>
			        			<div class="form-group">
						    		
						    		<input type="text" class="form-control" id="lado" name="lado" placeholder="lado del cuadrado">
						  		</div>
						  		<div class="form-group">
						    		
						    		<input type="text" class="form-control" id="diametro" name="diametro" placeholder="Diametro del circulo">
						  		</div>
						  		<button type="button" id="figura" name="figura" value='Circulo2' class="btn btn-default" 
						  onclick="realizaProceso($('#base').val(),$('#altura').val(),$('#lado').val(),$('#diametro').val());return false;" value="Calcula"/>Calcular</button>
							</form>
			     		</div>
			    	</div>
			  	</div>
			  	

			</div>
			<!-- Fin -->

			<div class="panel-group">
				<div class="panel panel-default">
			  		<h3 class="text-center">Respuesta</h3>
			  		<div id="resultado">
			  			
			  		</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		
	</body>
</html>
<script>
	$('.collapse').collapse();

	function realizaProceso(base, altura, lado, diametro){
        var parametros = {
            "base": base,
            "altura": altura,
            "lado": lado,
            "diametro" : diametro
        };
        console.log(parametros);
        $.ajax({
                data:  parametros,
                url:   'figura.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
	}
</script>
