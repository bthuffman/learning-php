<?php
//If comment out the unit cost variable then it will produce the default but also a notice about having an undefined variable.
$unit_cost = 0;

//More cryptic. This would work as long as unit_cost is never a false value (such as zero). If it is then it will produce 25. Because of the way this statement is set up $unit_cost should otherwise always be true (unless assigned a value that is considered by php to signify fasle [see previous chapters]).
$wholesale_price = $unit_cost ?: 25;

echo $wholesale_price;

//Using the ternary operator like this to set a default alue is unreliable, however it can be used effectively to assign different values depending on whether a condition is true or false
//SUMMARY:
//if = condition ? do this if true: do this if false;