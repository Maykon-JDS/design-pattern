<?php


trait GetSet {

    /**
     * é executado ao ler dados de propriedades inacessíveis (protegidas ou privadas) ou inexistentes.
     * 
     * @return void
     */
    public function __get($name) : void
    {

        echo "inaccessible (protected or private) or non-existing properties";
        
    }

    /**
     * É executado ao gravar dados em propriedades inacessíveis (protegidas ou privadas) ou inexistentes.
     * 
     * @return void
     */
    public function __set($name, $value) : void
    {

        echo "inaccessible (protected or private) or non-existing properties";

    }

    /**
     * Chamado quando um atributo inacessível é setado
     * 
     * @return void
     */
    public function __isset($name)
    {

        return null;

    }

    /**
     * Chamado quando um atributo inacessível é setado
     * 
     * @return void
     */
    public function __unset($name) : void
    {
        echo "inaccessible (protected or private) or non-existing properties";
    }

}

?>