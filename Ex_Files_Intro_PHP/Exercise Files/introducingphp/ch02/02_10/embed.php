<?php
$book = [
    'title' => "The Hitchhiker's Guide to the Galaxy",
    'author' => 'Douglas Adams',
    'description' => 'a comedy sci-fi adventure originally based on a BBC radio series'
];
$characters = [
    'Arthur Dent',
    'Ford Prefect',
    'Zaphod Beeblebrox',
    'Marvin, the paranoid android',
    'Slartibartfast'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Book: <?= $book['title'];?></h1>
<p>Description: <?= $book['description'];?></p>
<h2>Main Characters: <?= " <br> $characters[0] <br> $characters[1] <br> $characters[2] <br> $characters[3] <br> and $characters[4].";?></h2>

</body>
</html>