<?php
//Largest element in an array
function largest($array)
{
    $max = max($array);
    printf('Largest number is: %d', $max);

}
$list = array(19, 10, 5, 45, 67,23);
largest($list);