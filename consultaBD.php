<?php

require_once 'conexion.php';

function ConsultaSQL($elQuery)

{
    $conn = conectar();

    if (!$conn->set_charset("utf8")){
        printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);

    } else {

        //printf("Conjunto de caracteres actual: %s\n", $conexion->character_set_name());
    }

$queryDelvuelto = $conn-> query($elQuery);

return $queryDelvuelto;

}

?>