<?php

#array trim function
function unsetArray($array){
    
    $newArray = [];
    
    for($i = 0; $i < count($array); $i++){
        if($array[$i] != "" && $array[$i]){
            $newArray[] = $array[$i];
        }
    }
    
    return $newArray;
}

