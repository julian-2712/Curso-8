<?php

$configs = require_once __DIR__.'/config.inc.php';
$precioInicial = $argv[1];
$precioConIVA = $precioInicial * ( 1 + $configs['valor_iva'] / 100 );

echo "Valor del IVA: {$configs['valor_iva']}%".PHP_EOL;
echo "Sin IVA: \$$precioInicial, con IVA: \$$precioConIVA".PHP_EOL;
