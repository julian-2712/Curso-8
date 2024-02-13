<?php

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