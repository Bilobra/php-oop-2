<?php
include_once __DIR__ . '/../Product.php';
include_once __DIR__ . '/Market.php';


class Toy extends Product{
    
    use Market;

    public function __construct($param,$market = 'Animal House Market')
    {
        parent::__construct($param);

        $this->setMarket($market);

    
    }
    
}