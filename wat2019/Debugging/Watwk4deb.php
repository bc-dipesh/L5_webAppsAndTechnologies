<?php
// declare some variables
$day = 'Staurday';
$count = 300;

// Output to screen
echo 'I just wanted to say that\'s fine';
echo '<br/>';
echo 'The day is ' . $day;
echo '<br/>';
echo 'The count is ' . $count;
echo '<br/>';

//test some conditions
if ($count == 300) echo 'correct.';
else echo 'incorrect.';
echo '<br/>';

$time = 14;
if ($time < 14) echo 'Good morning';
else if ($time >= 12 && $time <= 18) echo 'Good afternoon';
else echo 'Good Evening';
