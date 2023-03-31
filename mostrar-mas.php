<?php

require_once 'include/head.php';
?>


<body>

    <!-- Consulta a la base de datos, que se encuentra en helpers -->
    <?php $TodasMaquinas = MostrarTodasMaquinas($conexion, null) ?>

    <div>
        <a href="index.php" class="a-icon"><img class="icon" src="./assets/img/icon-home.svg" alt="home"></a>
    </div>

    <div id="head">
        <h1>Service de Máquinas</h1>
        <a href="agregar.php">Nueva Máquina</a>
    </div>

    <div id="antiguas-maquinas">
        <a id="antiguas" href="antiguas.php">Maquinas Para realizar service</a>
    </div>

    <div class="cuerpo">

        <div id="search">
            <h2>Buscar Modelo</h2>
            <form action="buscar.php" method="POST">
                <input class="text" name="buscar">

                <input class="button" type="submit" name="enviar" value="Search">
            </form>

        </div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Sala</th>
                    <th>Fecha último Service</th>
                    <th>Acciones</th>
                    <th></th>
                </tr>
            </thead>

            <?php
            while ($Filas = mysqli_fetch_assoc($TodasMaquinas)) : ?>

                <tr class="campos">
                    <td data-label="id"><?= $Filas['id'] ?></td>
                    <td data-label="marca"><?= $Filas['marca'] ?></td>
                    <td data-label="modelo"><?= $Filas['modelo'] ?></td>
                    <td data-label="sala"><?= $Filas['sala'] ?></td>
                    <td data-label="fecha_service"><?= $Filas['fecha_service'] ?></td>

                    <td><a class="rojo" href="accions/eliminar.php?id=<?= $Filas['id'] ?>&indice=1">ELIMINAR</a></td>
                    <td><a href="editar.php?id=<?= $Filas['id'] ?>&indice=2">EDITAR</a> </td>

                </tr>
            <?php endwhile ?>
        </table>