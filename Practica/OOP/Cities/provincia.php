<?php

class provincia {
    protected $nombreP;
    protected $cities;
    
    public function __construct($nombreP) {
        $this->nombreP = $nombreP;
        $this->cities = array();
    }
    
    public function getNombreP() {
        return $this->nombreP;
    }
    
    public function getCities() {
        $ciudades = array();
        foreach ($this->cities as $city) {
            $ciudades[] = array($city->getNombreC(), $city->getCodPostal());
        }
        return $ciudades;
    }
    
    public function addCity(city $ciudad) {
        $this->cities[] = $ciudad;
    }

}

$city = new city('Resistencia', 3500);
$prov = new provincia('Chaco');
$prov->addCity('Barranqueras', 3540);
var_dump($prov);
?>