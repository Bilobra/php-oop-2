<?php

class Product {
    public $name;
    public $poster;
    public $description;
    public $brand;
    public $categories;
    public $price;
    public $quantity;

    // function __construct($name,$poster, $description, $weight, $volume, $brand, $categories,$price = 0)
    public function __construct($param)

    {
        $this->name = $param['name'];
        $this->poster = $param['poster'];
        $this->description = $param['description'];
        $this->brand = $param['brand'];
        $this->categories = $param['categories'];
        $this->price = $param['price'];
        $this->quantity = $param['quantity'];
        // $this->weight = $param['weight'];
        // $this->volume = $param['volume'];
    }

    // public function setPrice($price){

    // }
}