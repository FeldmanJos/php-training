<?php
/**
* @Entity @Table(name="province")
**/
class Province {
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;

    function __construct($name) {
        $this->name = $name;
        Province::$provincesList[] = $this;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public static function getProvince($name){
        foreach (Province::$provincesList as $key => $province) {
            if ($province->getName() == $name) {
                return $province;
            }
        }
        return null;
    }

}

?>
