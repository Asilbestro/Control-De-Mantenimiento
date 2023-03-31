<?php

//Conexion

$Server = 'localhost';
$User = 'root';
$Password = '';
$Name_Database = 'service';

$conexion = mysqli_connect($Server, $User, $Password, $Name_Database);

mysqli_query($conexion, "SET NAMES 'utf8'");


// $Server = 'localhost';
// $User = 'root';
// $Password = '';
// $Name_Database = 'service';
