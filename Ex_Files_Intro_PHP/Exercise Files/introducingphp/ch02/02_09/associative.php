<?php
//Instead of a numeric index, each array element is identified as a string (key value pairs)
//Likewise you can use the shorthand syntax or long form. Below is shorthand
$descriptions = [
	'Earth' => 'mostly harmless',
	'Marvin' => 'the paranoid andriod'
];
//In the above example Earth and Marvin are the keys.

//Adding elements to an associatie array (for individual ones you use the = not the =>)
$descriptions['Zaphod'] = 'President of the Imperial Galactic Government';

//Access array elements the same way as index except that you use the array keys.
echo $descriptions['Marvin'];

//Show the array
print_r($descriptions);

//Unlike an indexed array, you can't put an associative array element directly inside of a double quoted string.
//If you try... It won't work like below
//echo "Earth is described as $descriptions['Earth']";
//Can use curly braces to make it work
echo "Earth is described as {$descriptions['Earth']}";

//Arrays store multiple values in a single variable, often related, and can be any values.