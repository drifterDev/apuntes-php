<h2>Listado de usuarios</h2>
<?php while ($us = $usuarios->fetch_object()) : ?>
  <?= $us->nombre . " " . $us->apellidos ?> - <?= $us->email ?><br>
<?php endwhile; ?>