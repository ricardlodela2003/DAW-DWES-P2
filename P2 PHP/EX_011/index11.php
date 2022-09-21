<?php
function determinarCaracteres($cadena)
{
    if ($cadena === strtoupper($cadena)) {
        return 1;
    }
    if ($cadena === strtolower($cadena)) {
        return -1;
    }
    return 0;
}
$cadenas = ["HOLA"];
foreach ($cadenas as $cadena) {
    $resultado = determinarCaracteres($cadena);
    if ($resultado === 1) {
        echo "  $cadena es mayúscula   \n";
    } else if ($resultado === -1) {
        echo "   $cadena es minúscula   \n";
    }
}
        ?>