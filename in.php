<?php
$price =10000000;
$dis = 6;
$pdis =($price*$dis/100);
$price_total=($price-$pdis);

echo "<h2> Discount Calculator</h3>";
echo "Price= ".$price;
echo "<br>";
echo "Price Discount= ".$dis."%";
echo "<br>";
echo "pdids=".number_format($pdis,2)."kip";
echo "<br>";
echo "Total= ".$price_total."kip";


?>