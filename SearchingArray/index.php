<?php

#including the Search class
include './Search.php';

$array = array_combine(range(1, 100), range(1, 100));

#initialising a new Search object
$research = new Search($array);

$results = $research->findNumber(49);

#showing the result in a user friendly manner
echo $results['query'] . " is your number.";
echo "<br>";

echo $results['userInput'] . " are all the numbers.";
echo "<br>";

echo $results['incrementor'] . " iterations needed.";