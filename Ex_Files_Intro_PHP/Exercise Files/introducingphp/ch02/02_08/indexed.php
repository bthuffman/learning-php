<?php
//Two types of arrays in php (index and associative). This will show the index one.

//Store arrays in ordinary variables
$characters = array('Arthur Dent', 'Ford Prefect', 'Zaphod Bebblebrox');

//Cannot use echo for displaying an array.
//echo $characters;

//This will show the array
print_r($characters);

//shorthand array is very similar to Javascripts
$charactersTNG = ['Jean-Luc Picard', 'Will Riker', 'Data'];

//To add more elements to an array you can use an empty pair of square brackets after the variable name and assign them directly.
$charactersTNG[] = 'Gordi La Forge';
$charactersTNG[] = 'Beverly Crusher';

print_r($charactersTNG);

//using array index to access variable.
echo $characters[1]; //prints Ford Prefect at the end of the text.

