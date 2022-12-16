<?php
include_once("Classes.php");

$discount = 0;
$isHighSeason = false;
$bigStock = true;

$coupon = new CouponType(new BmwCouponGenerator);
echo "BMW: ";
echo $coupon->couponGenerator($discount, $isHighSeason, $bigStock);
echo "<br>";
$coupon->setCoupon(new MercedesCouponGenerator);
echo "Mercedes: ";
echo $coupon->couponGenerator($discount, $isHighSeason, $bigStock);
?>
