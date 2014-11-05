<?php
/**
 * @Entity @Table(name="city")
 * */
class City {
    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $idCity;
    /** @Column(type="string") * */
    protected $name;
    /**
    * @ManyToOne(targetEntity="Province", inversedBy="cities")
    * @JoinColumn(name="id_Provincia", referencedColumnName="idProvince")
    **/
    protected $province;
    
    public function getIdCity() {
        return $this->idCity;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getProvince() {
        return $this->province;
    }

    public function setProvince(Province $province) {
        $this->province = $province;
    }
    
    
}

?>
