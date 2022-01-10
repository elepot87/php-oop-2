<?php 

//classe principale

class Customer {
//proprietà

public $fidelity;
public $numbPurchase;
public $discount;

// metodi

public function __construct($fidelity, $numbPurchase) {
    $this -> fidelity = $fidelity;
    $this -> numbPurchase = $numbPurchase;
}

public function getFidelity() {
    return $this -> fidelity;
}

protected function setDiscount() {
    $this -> discount = $this-> numbPurchase >= 5 ? 30 : 10;
}

public function getDiscount() {
    // settare sconto
    $this -> setDiscount();
    // ritornarne il valore
    return $this -> discount;
}

}