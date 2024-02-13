<?php

/* 
La clase Order es un ejemplo de código no modularizado, ya que contiene varios métodos que podrían extraerse.

Los métodos load, save, update y delete podrían ser usados en diferentes lugares de la aplicación.
El hecho de que estos métodos estén en esta clase me da a entender que es posible que otras clases también cuenten con éstos métodos, 
lo que significaría que hay código duplicado. Si hay un bug en estos métodos, es muy probable que ese bug se encuentre esparcido en las 
demás clases que tienen estos métodos.
 */
    class Order
    {
        public function calculateTotalSum(){/*...*/}
        public function getItems(){/*...*/}
        public function getItemCount(){/*...*/}
        public function addItem($item){/*...*/}
        public function deleteItem($item){/*...*/}

        public function printOrder(){/*...*/}
        public function showOrder(){/*...*/}

        public function load(){/*...*/}
        public function save(){/*...*/}
        public function update(){/*...*/}
        public function delete(){/*...*/}
    }

