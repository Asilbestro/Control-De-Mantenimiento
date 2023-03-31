<?php
require_once '../accions/conexion.php';

if (isset($_POST)) {

    $Marca = $_POST['marca'];
    $Modelo = $_POST['modelo'];
    $Sala = $_POST['sala'];
    $Fecha = $_POST['fecha'];

    $sql = "INSERT INTO maquinas VALUES (NULL, '$Marca', '$Modelo', '$Sala', '$Fecha');";

    $guardar = mysqli_query($conexion, $sql);
}

header("Location: ../index.php");
