<html>
    <head></head>
    <body>
        <form action="exercici1.php" method="post">
            <label>Numero1:</label><br>
            <input type="number" name="numero1"><br>
            <label>Numero2:</label><br>
            <input type="number" name="numero2"><br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>

<?php

    if(isset($_POST['numero1']) && isset($_POST['numero2'])) { // isset() -> La variable esta definida i es not null
        echo "Numero1: {$_POST['numero1']}<br>";
        echo "Numero2: {$_POST['numero2']}<br>";

        $total = $_POST['numero1'] + $_POST['numero2'];

        echo "Total: $total<br>";
    }

/*

POST:
- Invisible per a l'usuari
- La informació proporcionada no és visible, per la qual cosa es pot enviar informació sensible
- Caràcters ASCII i dades binàries (arxius, imatges...)
- El mètode POST no té límit de quantitat d'informació a enviar 

GET:
- Els paràmetres URL es desen al costat de l'URL
- La informació és visible de manera que amb aquest mètode mai no s'envia informació sensible
- Només caràcters ASCII, no es poden enviar dades binàries (arxius, imatges...)
- Limitat al màxim de l'URL (2048 caràcters)

*/

?>

