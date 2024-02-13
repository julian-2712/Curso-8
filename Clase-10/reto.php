<?php

/* 
Se puede usar una función para extraer los valores de cada row. En esta función podríamos usar destructuring al momento de asignar 
el resultado de la misma en nuevas variables
str_replace se usa en diferentes lugares, con parámetros muy similares. Esto se podría reemplazar con una función en la cual solamente 
enviamos el valor que queremos actualizar.
La condición que evalua $hora y $trabajo se puede extraer,
Dentro de esta condición, a las variables horae y horas se les puede dar un nombre más descriptivo (horaentrada, horasalida)
*/

    for ($i = 0; $i < $total; $i++) {
        $rows = oci_fetch_array($rss, OCI_NUM);
        $empl_num = $rows[0];
        $nombre = $rows[1];
        $apaterno = $rows[2];
        $amaterno = $rows[3];
        $fecha = $rows[4];
        $hora = $rows[5];
        $horario = $rows[6];

        $empl_num = str_replace("?", 'Ñ', $empl_num);
        $nombre = str_replace("?", 'Ñ', $nombre);
        $apaterno = str_replace("?", 'Ñ', $apaterno);
        $amaterno = str_replace("?", 'Ñ', $amaterno);
        $fecha = str_replace("?", 'Ñ', $fecha);

        $trabajo = '14:00:00';

        if ($hora < $trabajo) {
            $horaentrada = $hora;
            $horae = $horaentrada;
            $horas = '00:00:00';
        } else {
            $horasalida = $hora;
            $horae = '00:00:00';
            $horas = $horasalida;
        }
        $horae = str_replace("?", 'Ñ', $horae);
        $horas = str_replace("?", 'Ñ', $horas);
        $horario = str_replace("?", 'Ñ', $horario);

        echo "$empl_num, $nombre, $apaterno, $amaterno, $fecha, $horae, $horas, $horario".PHP_EOL;
    }