<?php
include_once __DIR__ . '/../Product.php';

class Food extends Product{

    public $weight;
    public $deadline;
    public $price;

    public function __construct($param)
    {
        parent::__construct($param);

        $this-> weight = $param['weight'];
        $this-> deadline =  $param['deadline'];
        $this-> price = $param['price'];

    }

}