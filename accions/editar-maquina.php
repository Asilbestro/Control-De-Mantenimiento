<?php

require_once './conexion.php';

if (isset($_POST)) {

  $Marca = $_POST['marca'];
  $Modelo = $_POST['modelo'];
  $Sala = $_POST['sala'];
  $Fecha = $_POST['fecha'];

  $Id = $_GET['id'];

  $sql = "UPDATE maquinas SET marca = '$Marca', modelo = '$Modelo' , sala = '$Sala', fecha_service = '$Fecha' 
      WHERE id = $Id;";

  mysqli_query($conexion, $sql);
}

header('Location: ../index.php');
