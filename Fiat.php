<?php

class Fiat extends Carro {

    public function __construct($modelo)
    {
        parent::__construct();

        $this->setMarca("Fiat");
        $this->setModelo($modelo);
        $this->taxa = 10;
    }

    

}