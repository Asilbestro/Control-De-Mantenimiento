<?php

require_once '../accions/conexion.php';

if (isset($_GET['id'])) {

    $maquina_id = $_GET['id'];

    $sql = "DELETE FROM maquinas WHERE id = $maquina_id";

    mysqli_query($conexion, $sql);
}

header('Location: ../index.php');
