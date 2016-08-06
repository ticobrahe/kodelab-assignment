<?php

function arrayConcatenate($array1, $array2)
{
    $concatenate =array_merge($array1, $array2);
    return $concatenate;
}
$name = array('Samuel', 'Wale', 'Dami', 'Emmanuel', 'Josh' );
$list = array(19, 10, 5, 45, 67,23);
$concatenated = arrayConcatenate($list, $name);

echo(implode(',', $concatenated)) ;