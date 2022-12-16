<?php 

interface carCouponGenerator{
    public function addSeasonDiscount($discount, $isHighSeason);
    public function addStockDiscount($discount, $bigStock);
}
class BmwCouponGenerator implements carCouponGenerator{
    
    public function addSeasonDiscount($discount, $isHighSeason){
        if(!$isHighSeason) {
            return $discount += 5;
        }
    }
    public function addStockDiscount($discount, $bigStock){
        if($bigStock) {
            return $discount += 7;
        }
    }
}
class MercedesCouponGenerator implements carCouponGenerator{
    
    public function addSeasonDiscount($discount, $isHighSeason){
        if(!$isHighSeason) {
            return $discount += 4;
        }
    }
    public function addStockDiscount($discount, $bigStock){
        if($bigStock) {
            return $discount += 10;
        }
    }
}
class CouponType{
    protected $coupon;

    public function __construct(carCouponGenerator $coupon){
        $this->coupon = $coupon;
    }

    public function setCoupon(carCouponGenerator $coupon){
        $this->coupon = $coupon;
    }

    public function couponGenerator($discount, $isHighSeason, $bigStock) {

        $result1 = $this->coupon->addSeasonDiscount($discount, $isHighSeason);
        $result2 = $this->coupon->addStockDiscount($discount, $bigStock);
        $total = $result1 + $result2;
        return "Get {$total}% off the price of your new car.";
 }
 
}
?>