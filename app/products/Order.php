<?php


class Order {

    public $TotPrice;
    public $TotQuantity;
    public $ArrayProducts = [];

    public function __construct($Products){

        $this->ArrayProducts = $Products;
    }

    function getTotalPrice(){
        foreach($this->ArrayProducts as $Product){
            $this->TotPrice += $Product->price * $Product->quantity;
        }
    }

    function getTotalQuantity(){
        foreach($this->ArrayProducts as $Product){
            $this->TotQuantity += $Product->quantity;
        }
    }
}