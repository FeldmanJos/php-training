<?php

class Calculator {

    protected $acum;
    protected $flag;

    public function __construct() {
        $this->acum = 0;
        $this->flag = TRUE;
    }
    
    public function addOperand($operator){
        $this->acum = $operator;
        return $this;
    }

    public function add($operator){
        $this->acum += $operator;
        return $this;
    }
    
    public function subtract ($operator){
        $this->acum -= $operator;
        return $this;
    }
    
    public function divide ($operator){
        if ($operator!=0){
            $this->acum /= $operator;
            return $this;
        }else{
            $this->flag= FALSE;
            echo ('No se puede dividir por cero'.'<br>');
        }
    }
    public function power ($operator){
        $this->acum = pow ($this->acum,$operator);
        return $this;
    }
    
    public function printResult(){
        if ($this->flag == TRUE){
            echo $this->acum."<br>";
        }
    }
}     
?>