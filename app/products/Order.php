<?php


class Order {
    public $name_user ;
    public $TotPrice;
    public $TotQuantity;
    public $ArrayProducts = [];

    
    public function __construct(string $name_user, array $Products){
        
        $this->name_user = $name_user;
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