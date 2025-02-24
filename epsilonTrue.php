<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Pagina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

	<?php 
		$a=1.23456789;
        $b=1.23456780;
        $epsilon=0.00001;
        
        if(abs($a-$b) < $epsilon){
            echo"True";
        } else{
            echo "false";
        }
	?>

</body>
</html>