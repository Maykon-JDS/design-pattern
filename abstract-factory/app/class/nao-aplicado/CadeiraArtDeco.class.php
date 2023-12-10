<?php 

namespace Cadeira;

class CadeiraArtDeco{

    private string $nome;

    private float $preco;

    public const MODELO = "Art Deco"; 

    /**
     * 
     * 
     */
    function __construct(string $nome, float $preco)
    {
        
        $this->nome = $nome;

        $this->preco = $preco;

    }

    public function getNome() : string
    {
        return "";
    }

    public function getPreco() : float
    {
        return "";
    }

    public function __call($name, $arguments)
    {
        
    }

    static public function __callStatic($name, $arguments)
    {
        
    }

    public function __get($name)
    {
        
    }

    public function __set($name, $value)
    {
        
    }

    public function __isset($name)
    {
        
    }

    public function __unset($name)
    {
        
    }

    public function __sleep()
    {
        
    }

    public function __wakeup()
    {
        
    }

    public function __serialize(): array
    {
        return [];
    }

    public function __unserialize(array $data): void
    {
        
    }

    public function __toString()
    {
        
    }

    public function __invoke()
    {
        
    }

    static public function __set_state($properties)
    {
        
    }

    function __clone()
    {
        
    }

    public function __debugInfo()
    {
        
    }
    
    function __destruct()
    {
        
    }

}


?>