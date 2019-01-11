<?php

$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';

//heredoc syntax: Don't have to worry about quotes and escaping and can still use variables
//Note that to right of the <<< is the identifier for which it is typical to use all caps.
//Note: The note just above on line 9 could not be added to the right of "EOT" because that's just how it is. You cannot put anything to the right of the begining or ending identifier (including an unseen space, which is one of the few times php doesn't ignore whitespace) on the same line for either EOT (<<< EOT and EOT;)
$heredoc = <<< EOT
In "$title" by $author, $android the "paranoid android"
complains that he's asked to do menial tasks, even
though he's got "a brain $brain_size." Quite a valid point
I wonder how or if the movie addresses the potential need to address
the rights of sentient beings such as the robot. 
EOT;

echo $heredoc;
