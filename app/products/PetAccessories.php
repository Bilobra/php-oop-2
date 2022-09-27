<?php
include_once __DIR__ . '/../Product.php';

class Accessories extends Product {

    public $size;
    public $material;

    public function __construct($param)
    {
        parent::__construct($param);

        $this->size = $param['size'];
        $this->material = $param['material'];

    }
}