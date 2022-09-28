<?php
include_once __DIR__ . '/../Product.php';
include_once __DIR__ . '/Market.php';


class Toy extends Product{
    
    use Market;
    public function __construct($param)
    {
        parent::__construct($param);

    
    }
    
}