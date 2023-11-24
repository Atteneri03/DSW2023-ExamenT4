<?php include "top.php"; ?>
    <!--
    <div class="alert alert-success">¡Ejemplo mensaje de éxito!</div>
    <div class="alert alert-error">¡Ejemplo mensaje de error!</div>
    -->
    <nav>
        <p><a href="film.php">Volver</a></p>
    </nav>
    <section id="films">
      <h2>Categorías de la pelicula: Nombre de la película</h2>
      <form action="category_film.php" action="post">
        <ul>

          <?php
          
          $sql = 'SELECT * FROM category;';
          $result = $link->query($sql);
          $category = $result->fetch_assoc();

          $filmid = "SELECT `film_id` FROM film_category";
          $resultfilm = $link->query($filmid);
          $films = $resultfilm->fetch_assoc();

          $catid = "SELECT `category_id` FROM film_category";
          $resultcat = $link->query($catid);
          $categories = $resultcat->fetch_assoc();

          while ($category !== null) {
              $id = $category['category_id'];
              $name = $category['name'];
              
          ?>

          <li>
            <label>
              <input type="checkbox" name="<?=$name?>" id="<?=$id?>"><?=$name?>
            </label>
          </li>
          <?php
              $category = $result->fetch_assoc();
          }
          $result->close();
          ?>
        </ul>
        <p>
          <input type="submit" value="Actualizar">
        </p>
      </form>
    <section>
<?php include "bottom.php"; ?>