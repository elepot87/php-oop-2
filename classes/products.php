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


class Clothes extends Product {
// proprità taglia
public $size;

// metodi

public function __construct($name, $category, $quantity, $price, $size) {
    parent::__construct($name, $category, $quantity, $price);
    $this->size = $size;
}

public function getSize() {
    return $this->size;
}

}