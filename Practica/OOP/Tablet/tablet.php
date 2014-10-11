<?php

class Tablet {

    protected $battery;
    protected $installedApps;
    protected $appRunning;

    public function __construct() {
        $this->battery = 100; //si dejamos la bateria con un 20% e intentamos ejecutar la app1, nos marca un nuevo error
        $this->installedApps = Array();
        $this->appRunning = FALSE;
    }

    public function installApp(App $aplicacion) {
        if ($this->countInstalledApps() < 2) {
            $this->installedApps[] = $aplicacion;
            return TRUE;
        } else {
            echo 'Ya existen dos aplicaciones en el dispositivo, elimine una y vuelva a intentarlo' . '<br>';
            return FALSE;
        }
    }

    public function showApps() {
        foreach ($this->installedApps as $key => $app) {
            echo $app->getName() . '<br>';
        }
    }

    public function countInstalledApps() {
        return count($this->installedApps);
    }

    public function uninstallApp(App $aplicacion) {
        foreach ($this->installedApps as $key => $app) {
            if ($aplicacion->getName() === $app->getName()) {
                unset($this->installedApps[$key]);
            }
        }
    }

    public function getBatteryStatus() {
        echo "Su bateria se encuentra con un ".$this->battery."% de carga";
    }

    private function updateBatteryStatus($usedUpBattery) {
        $this->battery -= $usedUpBattery;
    }

    public function runApp(App $aplicacion, $duracion) {
        foreach ($this->installedApps as $key => $app) {
            if ($aplicacion === $app && $this->appRunning == FALSE) {
                $usedUpBattery = $aplicacion->getBatteryUse() * $duracion;
                if ($this->battery > $usedUpBattery) {
                    $this->appRunning = TRUE;
                    $this->updateBatteryStatus($usedUpBattery);
                    $this->closeApp();
                }  else {
                    echo 'El tiempo de uso de la aplicacion, consume mas de la bateria que tiene disponible';
                    return FALSE;    
                }
                if ($this->battery <= 10){
                    echo 'Tiene menos de 10% de bateria. Por favor, recargue e intente nuevamente.';
                    return FALSE;
                }
            } else{
                echo "Debe cerrar una aplicacion para poder ejecutar una nueva!".'<br>'; 
                return FALSE;
            }
        }
    }

    public function closeApp() {
        if ($this->appRunning == TRUE) {
            $this->appRunning = FALSE;
        }
    }

}

?>