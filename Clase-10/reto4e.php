<?php

/* 
Reto 4e 
La clase ContadorDeManzanas podría ser un poco más generica y de este modo sería reutilizable. Actualmente, si queremos obtener el numero 
de manzanas de un manzano, tenemos que crear una instancia de ContadorDeManzanas. Si tuvieramos 100 instancias de Manzano, y quisieramos obtener 
el numero de manzanas de cada uno de ellos, tendríamos que crear 100 instancias de ContadorDeManzanas, lo cual no me parece eficiente.  
*/

    class Manzano
    {
        private $manzanas = [];

        public function getManzanas()
        {
            return $this->manzanas;
        }
    }

    class ContadorDeManzanas
    {
        private $manzano;

        public function __contsruct(Manzano $manzano)
        {
            $this->manzano = $manzano;
        }

        public function cuantas()
        {
            return count($this->manzano->getManzanas());
        }
    }