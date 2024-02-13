<?php

  include_once __DIR__.'/config.inc.php';

  /** NOTA: ejecutar esto en terminal: php index.php argumento
   * *Supongamos el cálculo del iva sobre un precio
   * externalizamos el valor del iva a un archivo de configuracion
   */

  $iva = $configs['valor_iva'];

  $precioInicial = $argv[1];
  $precioConIva = $precioInicial * (1 + $iva);

  echo "valor del IVA es del: ".($iva * 100)."%".PHP_EOL;
  echo "precio con IVA: \$$precioConIva, precio sin IVA: \$$precioInicial".PHP_EOL;