<?php


trait MetodoInacessivel {

    /**
     * Chamado quando um método inacessível é chamado
     * 
     * @return void
     */
    public function __call($name, $arguments){

        echo "O Método \"$name\" é inacessível!";

    }

    /**
     * Chamado quando um método inacessível, em um contexto estático, é chamado
     * 
     * @return void
     */
    static public function __callStatic($name, $arguments)
    {

        echo "O Método \"$name\" é inacessível!";

    }

}

?>