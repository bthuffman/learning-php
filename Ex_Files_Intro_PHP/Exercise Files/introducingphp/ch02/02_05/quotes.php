<?php
$book = 'A Princess of Mar\'s'; //The back slash has created an escape sequence.
echo $book;
echo ' ';

//Alternatively you can use double quotes "" to surround the text
$bookTwo = "A Hitch Hiker's Guide to the Galaxy";
echo $bookTwo;
echo ' ';

//If want the double quotes to show
$bookThree = '"Star Wars: A New Hope\'s"';
echo $bookThree;
echo ' ';

//Alternatiely...
$bookFour = "\"Inherit the Wind\"";
echo $bookFour;
echo ' ';

//Anything in single quotes is treated as literal text,
// whereas if you want to incorporate a variable in a
// string then you need to use double quotes.
$bookFive = "Pendragon";
echo 'I love the $bookFive series';
echo ' ';
echo "I love the $bookFive series";

//The double quotes allow for variables and also escape sequences.
//Using escape sequences in single quotes will show the \
//Even so single quotes is recommended for literal text and avoid backslashes (or the option with the least amount).

/**
 * Created by PhpStorm.
 * User: bhuff
 * Date: 1/9/2019
 * Time: 2:19 PM
 */