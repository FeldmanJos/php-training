<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="province")
 * */
class Province {

    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $idProvince;

    /** @Column(type="string") * */
    protected $name;
    /**
   * @OneToMany(targetEntity="City", mappedBy="province")
   **/
    protected $cities;

    function __construct() {
        $this->cities= new ArrayCollection();
    }
    
    public function getIdProvince() {
        return $this->idProvince;
    }

    public function getCities() {
        return $this->cities;
    }

    public function setCities($cities) {
        $this->cities = $cities;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

}

?>
