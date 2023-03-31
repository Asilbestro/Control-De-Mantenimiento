<?php

require_once './include/head.php';
?>

<!-- Consulta a la base de datos, que se encuentra en helpers -->
<?php $MaquinasAntiguas = Masantiguas($conexion) ?>

<div>
    <a href="index.php" class="a-icon"><img class="icon" src="./assets/img/icon-home.svg" alt="home"></a>
</div>

<div id="head">
    <h1>Máquinas más antiguas</h1>
</div>

<div class="cuerpo">

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
        while ($Filas = mysqli_fetch_assoc($MaquinasAntiguas)) : ?>

            <tr class="campos">
                <td data-label="id"><?= $Filas['id'] ?></td>
                <td data-label="marca"><?= $Filas['marca'] ?></td>
                <td data-label="modelo"><?= $Filas['modelo'] ?></td>
                <td data-label="sala"><?= $Filas['sala'] ?></td>
                <td data-label="fecha_service"><?= $Filas['fecha_service'] ?></td>

                <td><a class="rojo" href="accions/eliminar.php?id=<?= $Filas['id'] ?>">ELIMINAR</a></td>
                <td><a href="editar.php?id=<?= $Filas['id'] ?>">EDITAR</a> </td>

            </tr>
        <?php endwhile ?>
    </table>
</div>