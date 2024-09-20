<html>
    <head></head>
    <body>
        <form action="exercici2.php" method="get">
            <label>Nombre producto:</label><br>
            <input type="text" name="producto">
            <input type="submit" value="enviar">
        </form>
    </body>
</html>

<?php

if(!empty($_GET["producto"])) {
    echo "Producto: {$_GET["producto"]}";
} else {
    echo "Producto no encontrado";
}

?>