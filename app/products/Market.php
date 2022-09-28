<?php

trait Market
{
    public $market;

    protected function setMarket($market)
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