<?php

trait Market
{
    public $market;

    public function setMarket($market)
    {
        if(is_string($market))
        {
            $this->market = $market;

        }else{
            throw new Exception('$market is not valid!');

        }
    }
    // public function getMarket()
    // {
    //     return $this->market;
    // }
}