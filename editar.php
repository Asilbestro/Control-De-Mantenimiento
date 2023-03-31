<?php
require_once './accions/conexion.php';
require_once './include/head.php';
require_once './accions/helpers.php';

$Maquina = MostrarMaquina($conexion, $_GET['id']);
?>


<body>
    <div>
        <a href="index.php" class="a-icon"><img class="icon" src="./assets/img/icon-home.svg" alt="home"></a>
    </div>
    
    <h1>Editar Máquina</h1>

    <div class="clase-padre">
        <div class="caja-editar">

            <?php while ($Fila = mysqli_fetch_assoc($Maquina)) : ?>

                <form action="./accions/editar-maquina.php?id=<?= $Fila['id'] ?>" method="POST">
                    <label>Marca</label>
                    <input type="tex" name="marca" value="<?= $Fila['marca'] ?>">

                    <label>Modelo</label>
                    <input type="text" name="modelo" value="<?= $Fila['modelo'] ?>">

                    <label>Sala</label>
                    <input type="text" name="sala" value="<?= $Fila['sala'] ?>">

                    <label>Fecha úlitmo service</label>
                    <input type="date" name="fecha" value="<?= $Fila['fecha_service'] ?>">

                    <input class="button" type="submit" name="enviar" value="Agregar">
                </form>
            <?php endwhile ?>
        </div>
    </div>
</body>



</html>