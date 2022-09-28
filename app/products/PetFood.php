<?php
include_once __DIR__ . '/../Product.php';
include_once __DIR__ . '/Market.php';


class Food extends Product{
   
    use Market;

    public $weight;
    public $deadline;
    

    public function __construct($param,$market)
    {
        parent::__construct($param,$market);

        $this-> weight = $param['weight'];
        $this-> deadline =  $param['deadline'];
        
        $this->getMarket();
       
    }

}