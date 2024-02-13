<?php

/* 
El método process de la clase ProjectManagement cuenta con una condición por cada tipo de parametro que recibe, y dependiendo de 
éste ejecuta cierto método exclusivo de cada clase. Por lo que si en un futuro se crea una nueva clase, el método process tendrá que ser modificado.
Las clases Programmer y Tester podrían hacer uso de una interfaz que cuente con un método work por ejemplo, y cada clase implementaría ese método a sus necesidades.
Al realizar este cambio, el método process quedaría más limpio ya que podría llamar un método que todas la clases tienen en común, en lugar 
de evaluar la clase del parámetro que recibe y con base en eso ejecutar el método correspondiente.
 */
    class Programmer
    {
        public function code()
        {
            return 'coding';
        }
    }
    class Tester
    {
        public function test()
        {
            return 'testing';
        }
    }
    class ProjectManagement
    {
        public function process($member)
        {
            if ($member instanceof Programmer) {
                $member->code();
            } elseif ($member instanceof Tester) {
                $member->test();
            };
            throw new Exception('Invalid input member');
        }
    }