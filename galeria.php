<?php
    /* Galeria.php
	Só Fotos. 
	Sem Likes, sem utilizadores.  
	*/
    	
    include( 'fotos.php' );
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Galeria de fotos</title>
	<link rel="stylesheet" href="fotos.css" >
</head>
<body>

	<h1>Galeria de fotos</h1>

	<section>

		
		<!-- Para cada foto no array $fotos, 
		     vamos ter uma fragmento de HTML 
		     <div class="foto"> ... </div>
		     Exemplificado de seguida:
		-->
        
        <?php
            foreach ($fotos as $idFoto => $urlFoto):
				echo <<<FOTO
					<div class="foto">
						<img src="$urlFoto">	
					</div>
				FOTO;
			endforeach;	
        ?>
				
	</section>
</body>
</html>