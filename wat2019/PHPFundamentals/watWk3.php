<?php
// My first PHP 
echo '<i>Dipesh B.C.</i><br/>';
echo '<b>C7202612</b>';

echo '<h3> Using Escape Characters </h3>';
echo '<blockquote> "most programmers say it\'s better to use \'echo\'
             rather than \'print\'" says who?</blockquote>';

echo '<h3>Variables</h3>';
$name = "Dipesh B.C.";
$age = 24;

echo '<p>Hi my name is ' . $name . ' and i am ' . $age . ' years old.<p>';
echo "<p>Mi nombre es $name y tengo $age anos de edad.</p>";

echo '<h3>Functions</h3>';
echo gettype($name); // returns type of the variable
echo '<br/>';
echo strlen($name); // returns length of the string
echo '<br/>';
echo strtoUpper($name); // uppercase the whole string

echo '<h3>Arithmetic</h3>';
$num1 = 9;
$num2 = 12;
$result = $num1 * $num2;
echo '<p>num1 = ' . $num1 . '</p>';
echo '<p>num2 = ' . $num2 . '</p>';
echo '<p>num1 x num2 = ' . $result . '</p>';
$result = ($num1 / $num2) * 100;
echo '<p>num1 as a percentage of num2 = ' . $result . '%</p>';
$result = round(($num2 / $num1), 0, PHP_ROUND_HALF_DOWN);
$remainder = $num2 % $num1;
echo '<p>num2 divided by num1 = ' . $result . ' remainder ' . $remainder . '</p>';

// calculate height in feet and inches
$height_in_meter = 1.65;
$height_in_inch = round(($height_in_meter * 100) / 2.54, 2, PHP_ROUND_HALF_DOWN);
$height_in_ft = round($height_in_inch / 12, 0, PHP_ROUND_HALF_DOWN);

echo '<p>Name: Dipesh</p>';
echo '<p>Age: 12</p>';
echo '<p>Height in Meters: ' . $height_in_meter . '</p>';
echo '<p>Height in Feet and inches: ' . $height_in_ft . 'ft ' . $height_in_inch . 'ins</p>';

echo '<h3>Selection</h3>';
$day = date('l');
echo 'it\'s ' . $day;

// check if it is midweek
if ($day == 'Wednesday') echo '<p>It\'s midweek.</p>';
else echo '<p>It\'s not midweek.</p>';

// check if it is morning, afternoon or night
$current_hour = date("H");

if ($current_hour < '12') echo '<p>Good Morning.</p>';
else if ($current_hour >= '12' && $current_hour <= '18') echo '<p>Good Afternoon.</p>';
else if ($current_hour > '18') echo '<p>Good Night.</p>';

$password = 'password';
$pass_length = strlen($password);
if ($pass_length > 4 && $pass_length < 10) echo '<p>Password length is valid.</p>';
else echo '<p>Password length is invalid.</p>';

if ($password == 'password' || $password == 'username') echo '<p>Password valid.</p>';
else echo '<p>Password invalid.</p>';

// Check if eligible for discount
$initial_ticket_price = 25;
$age = 15;
$membership = true;
$discount = 0;

// algorithm
if ($age < 12) $discount = 50;
else if ($age < 18) $discount = 25;
else if ($age > 65) $discount = 25;
if ($membership) $discount += 10;

$final_price = $initial_ticket_price - ($initial_ticket_price * ($discount/100));

echo '<p>Initial Ticket Price: £' . $initial_ticket_price . '</p>';
echo '<p>Age: ' . $age . '</p>';
echo '<p>Member: ' . str_replace($membership, "Yes", $membership) . '</p>';
echo '<p>Final Ticket Price: £' . $final_price . '</p>';
