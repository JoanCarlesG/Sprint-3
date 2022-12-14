<?php 
class MercedesCouponGenerator implements carCouponGenerator{
    public static function addSeasonDiscount($discount, $isHighSeason){
        if(!$isHighSeason) {$discount += 4;}
        return $discount;
    }
    public static function addStockDiscount($discount, $bigStock){
        if($bigStock) {$discount += 10;}
        return $discount;
    }
}

?>