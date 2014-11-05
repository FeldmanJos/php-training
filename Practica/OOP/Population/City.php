<?php

namespace Population;

class City {

    protected $name;
    protected $population;
    protected $province;
    protected $postalCode;
                function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getPopulation() {
        return $this->population;
    }

    public function setPopulation($population) {
        $this->population = $population;
        return $this;
    }

    public function getProvince() {
        return $this->province;
    }

    public function setProvince(Province $province) {
        $this->province = $province;
        return $this;
    }
    
    public function getPostalCode() {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

    
    public function belongsTo(Province $province) {
        return ($this->province === $province);
    }

}

?>
