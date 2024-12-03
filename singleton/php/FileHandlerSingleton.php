<?php

class FileHandlerSingleton {

    static private FileHandlerSingleton $instance;

    private function constructor(){


    }

    static function getInstance() {

        if(!isset(FileHandlerSingleton::$instance)) {

            echo "Creating a new instance\n";

            FileHandlerSingleton::$instance = new FileHandlerSingleton();

        }
        else {

            echo "Returning the existing instance\n";

        }

        return FileHandlerSingleton::$instance;

    }

}


$teste = FileHandlerSingleton::getInstance();
$teste2 = FileHandlerSingleton::getInstance();
$teste3 = FileHandlerSingleton::getInstance();
$teste4 = FileHandlerSingleton::getInstance();
$teste5 = FileHandlerSingleton::getInstance();
