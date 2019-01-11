<?php
$name = 'Arthur Dent';
$day = 'Thursday';

//Alternative to using {}, use the ":", "endif;", and mandated to use the word "elseif" as supposed to the more flexible two word "else if". This can improve readability, however this syntax must be used throughout all the conditions.
if ($name == 'Arthur Dent' && $day == 'Thursday') :
    echo 'I could never get the hang of Thursdays.';
 elseif ($name == 'Marvin' || $day == 'Wednesday') :
    echo "I've got this terrible pain in all the diodes down my left-hand side.";
 else :
    echo 'Is that really a piece of fairy cake?';
endif;
