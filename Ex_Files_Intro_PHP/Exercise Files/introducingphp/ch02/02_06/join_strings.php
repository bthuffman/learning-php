<?php
$firstName = 'David';
$lastName = 'Powers';
$title = '"The Hitchhiker\'s Guide to the Galaxy"';
$author = 'Douglas Adams';
$answer = 42;
$newLines = "\r\n\r\n"; //Browswers don't showcarriage returns and new line characters. Right clicking "view the page source" will reveal that the lines have been added in (see below where echo a variable with this variable concatenated in)

//$fullName = $firstName . $lastName; //The space surrounding the dot is to make it easier to read.
//$fullName = $firstName . ' ' . $lastName; //One way to add a space between first and last name.
$book = "$title by $author"; //Double quoted string is a better way of providing space.
//Therefore...
$fullName = "$firstName $lastName";

echo $fullName . '<br>';
echo $book . '<br>';

//Combined concatenation operator ( . ). Ads new string on to the end of an existing one.
$message = "Name: $fullName $newLines";
$message .= "Book: $book $newLines"; //here the .= is adding more text to an existing variable.
$message .= "Answer: $answer";
echo $message;


