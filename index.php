<?php<?php
error_reporting(E_ALL^E_STRICT);
ini_set('display_errors', 'on');
ini_set('date.timezone','America/Mexico_City');
include_once 'models/mysql.php';
include_once 'models/ResultadosFinales.php';
$ResultadosFinales = new ResultadosFinales();
$muestra_resultados = $ResultadosFinales->muestra_resultados();
?>
<html>
     <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista de Orden de Producción| REPL</title>
		<link rel="stylesheet" type="text/css" href="css/estilo-login.css"/>
        <link href="styles/css/bootstrap.min.css" rel="stylesheet">
		<link href="styles/css/estilosbioed.css" rel="stylesheet">
		<script src="dist/js/bootstrap.min.js"></script>
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
		<script type="text/javascript" src="../../../styles/js/jquery-3.3.1.min.js" ></script>
        <script src="styles/js/jquery-3.3.1.min.js"></script>
		<script src="styles/js/bootstrap.js"></script>
    </head>
	<body>
	<header>
	  
    </header>
    <div class="row">
			<br>
			<br>
			<br>
			<div class="col-md-2"> 
			</div>
			<div class="col-md-8" > 
                <br>
                <br>
                <br>
			
				<center><h3>RESULTADOS FINALES COVID</h3></center>
                
                <div class="alert alert-info" role="alert"><center> Resumen final casos COVID - 19 </center></div>
					
						
					<table class=" table table-hover">
                    <thead>
                        <tr> 
                            <th> Tabla 1  </th>
                            <th> Campo 2 </th>
							<th> Campo 3 </th>  
                            
                            
                        </tr>
                        </thead>
                       <?php while ($row = mysqli_fetch_assoc($muestra_resultados)): ?>
                            <tr>
                                <td><?php echo $row['CLAVE_ENTIDAD'] ?></td>
                                <td><?php echo $row['ENTIDAD_FEDERATIVA'] ?></td>
                                <td><?php echo $row['ABREVIATURA'] ?></td>
                                
                            </tr>
                            <?php endwhile; ?>
                        
                   
                </table>
            </div>
        </div>
    </body>
</html>