<?php include "top.php"; ?>
<section id="create">
    <h2>Nueva categoría</h2>
    <nav>
        <p><a href="film.php">Volver</a></p>
    </nav>
    <form action="create.php" autocomplete="off" method="POST">
        <fieldset>
            <legend>Datos de la categoría</legend>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" required>
            <p></p>
            <input type="reset" value="Limpiar">            
            <input type="submit" value="Crear">
        </fieldset>
    </form>
    <?php
     if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $sql = "INSERT INTO `category` (`category_id`,`name`, `last_update`) VALUES (NULL,'$name',CURRENT_TIMESTAMP);";
        $result = $link->query($sql);
        if ($result) {
            echo "Categoría creada";
        } else {
            echo "Error al crear la categoria $name"; 
        }
     } 
    ?>
</section>
<?php include "bottom.php"; ?>