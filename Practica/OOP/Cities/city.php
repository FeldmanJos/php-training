<?php

class city {
    protected $nombreC;
    protected $codPostal;
    
    public function __construct($nombreC,$codPostal) {
        $this->nombreC = $nombreC;
        $this->codPostal = $codPostal;
    }
    
    public function getNombreC() {
        return $this->nombreC;
    }
    
    public function getCodPostal() {
        return $this->codPostal;
    }
}
?>