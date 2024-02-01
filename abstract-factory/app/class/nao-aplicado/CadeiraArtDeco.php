<?php 

namespace Cadeira;

use GetSet;

use MetodoInacessivel;

use Modelo;

class CadeiraArtDeco{

    private string $nome;

    private float $preco;

    private Modelo $modelo; 

    /**
     * Construtor (Magic Methods)
     * 
     * @return void
     */
    function __construct(string $nome, float $preco)
    {
        
        $this->nome = $nome;

        $this->preco = $preco;

    }

    /**
     * Retorna o nome
     * 
     * @return string
     */
    public function getNome() : string
    {

        return $this->nome;

    }

    /**
     * Retorna o preço
     * 
     * @return float
     */
    public function getPreco() : float
    {

        return $this->preco;

    }

    use MetodoInacessivel;

    use GetSet;

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
