<?php
$name = 'Arthur Dent';
$day = 'Wednesday';

//Notice that the first conditional says if day is NOT equal to Thursday. If it was set to == equal then the second conditional would work. The second condition is currently true, however the first condition that the parse comes upon that ends up being true is the one whose code will be run.
if ($name == 'Arthur Dent' && $day !== 'Thursday') {
    echo 'I could never get the hang of Thursdays.';
} elseif ($name == 'Marvin' || $day == 'Wednesday') {
    echo "I've got this terrible pain in all the diodes down my left-hand side.";
} else {
    echo 'Is that really a piece of fairy cake?';
}
//If you use the assignment operator instead of == then you assign the variable to whatever = to which then in itself will always be true because you assigned it!