<h2>Listado de notas</h2>
<?php while ($nota = $notas->fetch_object()) : ?>
  <?= $nota->titulo ?> - <?= $nota->fecha ?><br>
<?php endwhile; ?>