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
        $x = "NEGRO";
        $y = "BLANCO";
        $z = ($y or $x); 
        echo $z ? "TRUE" : "FALSE";
    ?>

</body>
</html>