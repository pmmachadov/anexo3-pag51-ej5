<?php
// Pseudo codigo
// 1. Crear una funcion llamada serialcheck
// 2. Recibe como parametro una cadena
// 3. Devuelve un valor logico cierto o falso
// 4. Comprueba que la cadena dada contiene 4 grupos de cifras separadas por guiones
// 5. Que el primer y tercer valor son pares
// 6. Que el segundo y el ultimo son impares
// 7. Retorna como resultado un valor logico cierto
// 8. Llama a la funcion y le pasa como parametro la cadena
// 9. Imprime el resultado de la funcion

function serialcheck($cadena)
{
    $array = explode("-", $cadena); // Separa la cadena en un array
    if (count($array) == 4 && $array[0] % 2 == 0 && $array[2] % 2 == 0 && $array[1] % 2 != 0 && $array[3] % 2 != 0) { // Comprueba que la cadena dada contiene 4 grupos de cifras separadas por guiones, que el primer y tercer valor son pares, y que el segundo y el último son impares
        return true; // Retorna como resultado un valor logico cierto
    }
    return false; // Retorna como resultado un valor logico falso
}
?>