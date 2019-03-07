<?php

namespace Kairos\People;

class Person
{
    private $data = [];
    
    public function __construct()
    {
        echo 'classe instanciada' . PHP_EOL;
    }
    
    public function setNome(string $nome) 
    {
        return $this->data[] = $nome;    
    }

    public function setIdade(int $idade) 
    {
        return $this->data[] = $idade;    
    }
    
    public function setPeso(float $peso) 
    {
        return $this->data[] = $peso;    
    }

    public function __toString() :string
    {
        return $this->name . ', ' . $this->age . ', ' . $this->weight . '.';
    }
}