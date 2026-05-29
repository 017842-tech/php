<?php

function findTotal()
{
    // Preguntar cuántos números se van a capturar
    echo "¿Cuántos números quieres sumar? ";

    $n = intval(readline());

    $sum = 0;

    // Ciclo para capturar cada número
    for ($i = 1; $i <= $n; $i++) {

        echo "Ingresa el número $i: ";

        $numero = intval(readline());

        $sum += $numero;
    }

    // Mostrar resultado final
    echo "La suma total es: " . $sum . "\n";
}

// Llamar la función
findTotal();

?>