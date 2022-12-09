<?php
// función que ordena un array 'numeros' usando el algoritmo de ordenación por inserción
function ordenacionPorInsercion(array $numeros): array
{
    // recorremos todos los elementos del array desde el segundo hasta el último
    for ($i = 1; $i < count($numeros); $i++) {
        // guardamos el elemento en una variable temporal
        $elemento = $numeros[$i];

        // recorremos los elementos anteriores al elemento actual desde el final hacia el principio
        for ($j = $i - 1; $j >= 0; $j--) {
            // si el elemento anterior es mayor que el elemento actual, lo desplazamos una posición hacia la derecha
            if ($numeros[$j] > $elemento) {
                $numeros[$j + 1] = $numeros[$j];
            }
            // si no, hemos encontrado la posición correcta para el elemento actual, así que salimos del bucle
            else {
                break;
            }
        }

        // insertamos el elemento actual en su posición correcta en la lista ordenada
        $numeros[$j + 1] = $elemento;
    }

    // devolvemos el array 'numeros' ordenado
    return $numeros;
}
