<?php

#including the necessary files
include_once './functions.php';
include_once './Sort.php';

#example array
$array = array("balloon", "evening", "cat", "arbalete", "doctor", null, '');

#initialising two new Sort objects
$ascArray = new Sort($array);
$descArray = new Sort($array);

#showing the result in a user friendly manner
echo '<h4>User array</h4>';
echo '<pre>'; print_r($array); echo '</pre>';

echo '<h4>Ascendingly sorted user array</h4>';
echo '<pre>'; print_r(unsetArray($ascArray->sort("asc"))); echo '</pre>';

echo '<h4>Descendingly sorted user array</h4>';
echo '<pre>'; print_r(unsetArray($descArray->sort("desc"))); echo '</pre>';