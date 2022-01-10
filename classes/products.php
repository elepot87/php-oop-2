<?php

// classe principale
class Product {

// proprietà
public $name;
public $category;
public $quantity;
public $price;

// metodi
public function __construct($name, $category, $quantity, $price) {
    $this -> name = $name;
    $this -> category = $category;
    $this -> quantity = $quantity;
    $this -> price = $price;
}

public function getName() {
    return $this->name;
}

public function getCategory() {
    return $this->category;
}

public function getQuantity() {
    return $this->quantity;
}

public function getPrice() {
    return $this->price;
}
}