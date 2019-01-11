<?php
//Commenting out unit cost will no longer produce the error notice and still produce 25 thanks to the ??.
$unit_cost = 0;

//The ?? (null-coalesce operator) solves the 0 from being interepretted as false and is instead interpreted at his face value, producing zero on the webpage. Note this is a php7 operator.
$wholesale_price = $unit_cost ?? 25;

echo $wholesale_price;
