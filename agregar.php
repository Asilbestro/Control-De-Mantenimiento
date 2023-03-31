<?php require_once './include/head.php' ?>

<body>
    <div>
        <a href="index.php" class="a-icon"><img class="icon" src="./assets/img/icon-home.svg" alt="home"></a>
    </div>

    <h1>Nueva Máquina</h1>

    <div class="clase-padre">
        <div class="caja-editar">
            <form action="./accions/nueva-maquina.php" method="POST">
                <label>Marca</label>
                <input type="tex" name="marca">

                <label>Modelo</label>
                <input type="text" name="modelo">

                <label>Sala</label>
                <input type="text" name="sala">

                <label>Fecha úlitmo service</label>
                <input type="date" name="fecha">

                <input class="button" type="submit" name="enviar" value="Agregar">
            </form>
        </div>
    </div>
</body>