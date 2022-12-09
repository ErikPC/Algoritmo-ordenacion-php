<?php

// función que ordena un array 'numeros' usando el algoritmo de ordenación por intercambio o burbuja
function ordenacionPorIntercambio(array $numeros): array
{
    // recorremos todos los elementos del array
    for ($i = 0; $i < count($numeros); $i++) {
        // comparamos cada elemento con su elemento inmediatamente siguiente
        for ($j = 0; $j < count($numeros) - 1; $j++) {
            // si el elemento está en el orden incorrecto, lo intercambiamos con su elemento inmediatamente siguiente
            if ($numeros[$j] > $numeros[$j + 1]) {
                $aux = $numeros[$j];
                $numeros[$j] = $numeros[$j + 1];
                $numeros[$j + 1] = $aux;
            }
        }
    }

    // devolvemos el array 'numeros' ordenado
    return $numeros;
}
