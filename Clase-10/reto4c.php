<?php

/* 
La clase Animal cuenta con una función llamada fly sin embargo, no todos los animales pueden volar. La clase Dog, al heredar de la 
clase Animal, abre la posibilidad de que se pueda a llamar este método desde clase Dog, por lo que el código sobreescribe el método heredado 
para evitar que éste se pueda ejecutar, lo cual no me parece lo más adecuado. Esto se puede resolver removiendo el método fly de la clase Animal, 
y creando una nueva clase Ave que herede de Animal y que cuente con su propio método fly. De esta manera, las clases que hereden de **Animal **
en un futuro no tendrán el método **fly **disponible, y las clases que hereden de Ave sí tendrán el método fly disponible,
*/
    class Animal
    {
        public function fly()
        {
        }
    }

    class Dog extends Animal
    {
        public function fly()
        {
            if (! $this->hasWings) {
                throw new Exception;
            }
        }
    }