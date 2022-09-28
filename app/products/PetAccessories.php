<?php
include_once __DIR__ . '/../Product.php';
include_once __DIR__ . '/Market.php';


class Accessories extends Product {

    use Market;

    public $size;
    public $material;

    public function __construct($param,$market = 'Animal House Market')
    {
        parent::__construct($param);

        $this->size = $param['size'];
        $this->material = $param['material'];

        $this->setMarket($market);
        // $this->market = $market;

    }
}