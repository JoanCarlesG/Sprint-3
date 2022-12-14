<?php 
include ("carCouponGenerator.php");
include ("Bmw.php");
include ("Mercedes.php");
class Context{
    private $strategy;
    public function __construct(carCouponGenerator $strategy)
    {
        $this->strategy = $strategy;
    }
    public function setStrategy(carCouponGenerator $strategy)
    {
        $this->strategy = $strategy;
    }
    public function doTheMath($discount, $isHighSeason, $bigStock){
        $this->strategy->addSeasonDiscount($discount, $isHighSeason);
        $this->strategy->addStockDiscount($discount, $bigStock);

    }
}
?>