<?php

class Carro {


    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $preco;
    public $taxa;

    public function __construct()
    {
        $this->marca = "indefinida";
        $this->modelo = "indefinido";
        $this->ano = 0;
        $this->cor = "indefinida";
        $this->preco = 20000;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function calculaPreco ()
    {
        return($this->preco + ($this->preco * $this->taxa / 100));
    }

}