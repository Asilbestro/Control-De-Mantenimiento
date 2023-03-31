<?php
require_once 'include/head.php';


if (!$_POST['buscar'] <> null) {
    header("Location: index.php");
}

$ReturnConsulta = BuscarMaquinas($conexion, $_POST['buscar']);
?>

<div>
    <a href="index.php" class="a-icon"><img class="icon" src="./assets/img/icon-home.svg" alt="home"></a>
</div>

<div class="cuerpo">
    <h1>Busqueda encontrada de: <?= $_POST['buscar'] ?> </h1>
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
        <?php if (!empty($ReturnConsulta) && mysqli_num_rows($ReturnConsulta) >= 1) : ?>
            <?php while ($Filas = mysqli_fetch_assoc($ReturnConsulta)) : ?>
                <!-- <tbody> -->
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
        <?php else : ?>
            <br>
            <div class="epigrafe">
                <h2>No se encontraron maquinas de ese modelo</h2>
            </div>

        <?php endif; ?>
        </tbody>
    </table>
</div>