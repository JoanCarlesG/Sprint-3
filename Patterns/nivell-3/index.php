<?php 
include ("Context.php");
include ("carCouponGenerator.php");
include ("Bmw.php");
include ("Mercedes.php");
function couponGenerator($car) {

    $discount = 0;
    $isHighSeason = false;
    $bigStock = true;
    
    if($car == "bmw"){
        $context = new Context(new BmwCouponGenerator());
        $context->doTheMath($discount, $isHighSeason, $bigStock);
    } else if($car == "mercedes") {
        $context = new Context(new MercedesCouponGenerator());
        $context->doTheMath($discount, $isHighSeason, $bigStock);
    }
    return $coupon = "Get {$discount}% off the price of your new car.";
}
echo couponGenerator("bmw");
?>