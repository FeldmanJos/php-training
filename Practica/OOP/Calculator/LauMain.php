<?php
require_once '/LauCalc.php';

//division por cero
$calculator = new Calculator;
$calculator->addOperand(10);
$calculator->divide(0);
$calculator->printResult();  

//division entera
$calc1= new Calculator;
$calc1->addOperand(20);
$calc1->divide(3);
$calc1->printResult();

//suma
$calc2 = new Calculator;
$calc2->addOperand(5);
$calc2->add(10);
$calc2->printResult();

//potencia
$calc3 = new Calculator;
$calc3->addOperand(10);
$calc3->power(2);
$calc3->printResult();

//resta
$calc4 = new Calculator;
$calc4->addOperand(5);
$calc4->subtract(1);
$calc4->printResult();
?>