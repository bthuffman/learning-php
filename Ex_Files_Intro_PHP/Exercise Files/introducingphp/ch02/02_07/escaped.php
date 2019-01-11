<?php

$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';

$escaped = "In \"$title\" by $author, $android the \"paranoid android\" complains that he's asked to do menial tasks, even though he's got \"a brain $brain_size.\"";
//Instead of this ugly use of escapes above you can use a heredob syntax, see heredoc.php

echo $escaped;