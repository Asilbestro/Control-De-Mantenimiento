<?php

//Funcion para mostrar todas las máquinas, y la uso desde el index
function MostrarTodasMaquinas($conexion, $limit)
{
    if (isset($limit)) {
        $sql = "SELECT * FROM maquinas LIMIT $limit";
    } else {
        $sql = "SELECT * FROM maquinas";
    }

    $all_machines = mysqli_query($conexion, $sql);

    return $all_machines;
}

//Funcion para mostrar una máquina, y la invoco y la uso desde el fichero que lo requiera
function MostrarMaquina($conexion, $id)
{
    $sql = "SELECT * FROM maquinas WHERE id = $id;";

    $machine = mysqli_query($conexion, $sql);

    return $machine;
}

//Funcion para mostrar las 4 máquinas más antiguas, y la invoco y la uso desde el fichero que lo requiera
function Masantiguas($conexion)
{
    $sql = "SELECT * FROM maquinas ORDER BY (fecha_service) ASC LIMIT 6;";

    $Antiguas = mysqli_query($conexion, $sql);

    return $Antiguas;
}

//Funcion para buscar una máquina, y la invoco y la uso desde el fichero que lo requiera
function BuscarMaquinas($conexion, $modelo)
{
    $sql = "SELECT * FROM maquinas WHERE modelo LIKE '%$modelo%' ";

    $Buscar = mysqli_query($conexion, $sql);

    return $Buscar;
}
