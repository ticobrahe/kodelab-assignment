<?php
$square = function($n){
    return($n * $n);
};

function on_all($fn , $array)
{
    return  array_map($fn, $array);
}
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
$calculate = on_all($square, $array);
var_dump($calculate);