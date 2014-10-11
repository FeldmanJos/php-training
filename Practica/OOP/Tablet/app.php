<?php

class App {

    protected $name;
    protected $batteryUse;

    function __construct($name, $batteryUse) {
        $this->name = $name;
        $this->batteryUse = $batteryUse;
    }

    public function getName() {
        return $this->name;
    }

    public function getBatteryUse() {
        return $this->batteryUse;
    }

}
?>