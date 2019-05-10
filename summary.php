<?php
if (!empty($errors)): ?>
  <section id="form-errors">
    <h3>Error</h3>
      <p>Ha ocurrido un error en la carga del formulario:</p>
      <?php
    foreach ($errors as $type => $error): ?>
      <p><?= $error ?></p>
    <?php
    endforeach;
  ?> </section> <?php
else: ?>
  <section id="form-summary">
    <h3>Sus datos ingresados para el Turno:</h3>
      <?php
    foreach ($info as $label => $value): ?>
      <p><?= $label . ': ' . $value  ?></p>
    <?php
    endforeach;
      ?> </section> <?php
endif;