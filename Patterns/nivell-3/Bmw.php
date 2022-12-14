<?php 
class BmwCouponGenerator implements carCouponGenerator{
    
    public static function addSeasonDiscount($discount, $isHighSeason){
        if(!$isHighSeason) {
            $discount += 5;}
        return $discount;
    }
    public static function addStockDiscount($discount, $bigStock){
        if($bigStock) {$discount += 7;}
        return $discount;
    }
}
?>