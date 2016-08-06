<?php
//element in odd position in a list
function arrayOdd($array)
{
    foreach ($array as $key => $value)
    {
        if ($key % 2 == 0)
        {
            echo $value .'<br>';
        }
    }
}

$name = array('Samuel', 'Wale', 'Dami', 'Emmanuel', 'Josh' );
arrayOdd($name);