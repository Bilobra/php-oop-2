<?php

trait Market
{
    public $market = 'Animal House Market';

    public function setMarket($market)
    {
        $this->market = $market;
    }
    public function getMarket()
    {
        return $this->market;
    }
}