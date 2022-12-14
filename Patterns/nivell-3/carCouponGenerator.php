<?php 
interface carCouponGenerator{
    public static function addSeasonDiscount($discount, $isHighSeason);
    public static function addStockDiscount($discount, $bigStock);
}
?>