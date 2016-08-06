<?php
function pigLatin($string)
{
    $toArray = explode(' ', $string);
    foreach ($toArray as $value) {
        $firstLetter = ($value[0]);
        $rest = substr($value,1);
        $newString =  $rest . $firstLetter .'ay';
        echo $newString . ' ';

    }

}
$string = 'Samuel is a genius';
 pigLatin($string);