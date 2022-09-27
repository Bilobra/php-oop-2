<?php

class Product {
    public $name;
    public $poster;
    public $description;
    public $brand;
    public $categories;

    // function __construct($name,$poster, $description, $weight, $volume, $brand, $categories,$price = 0)
    function __construct($param)

    {
        $this->name = $param['name'];
        $this->poster = $param['poster'];
        $this->description = $param['description'];
        $this->brand = $param['brand'];
        $this->categories = $param['categories'];
        // $this->weight = $param['weight'];
        // $this->volume = $param['volume'];
        // $this->price = $param['price'];
    }

    // public function setPrice($price){

    // }
}