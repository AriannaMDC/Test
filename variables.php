<?php

    $nombre = 'Arianna';
    $edad = 20;
    $altura = 1.65;
    $mayorEdad = true;

    global $nombre;

    $Variable1 = 100; // php es Case Sensitive
    $variable1 = 10;
    $variable2 = 30;

    if($variable1 > $variable2) {
        echo "La variable 1 ($variable1) es mayor que la variable 2 ($variable2) <br>";
    } else {
        echo "La variable 1 ($variable1) es menor que la variable 2 ($variable2) <br>";
    }

    echo "<br><br>While:<br>";

    $while = 1;

    while($while <= 100) {
        echo "{$while}";
        $while++;
    }

    echo "<br><br>Array:<br>";

    $a1 = [1, 2, 3, 4];

    foreach ($a1 as $valor1) {
        echo $valor1;
    }

    echo "<br>";

    $a2 = [
        1 => 'a',
        2 => 'b',
        3 => 'c'
    ];

    foreach($a2 as $key => $valor) {
        echo "{$key} -> {$valor} <br>";
    }

    echo "<br><br>For:<br>";

    for($vFor = 1; $vFor <= 10; $vFor++) {
        echo $vFor;
    }

?>