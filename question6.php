<?php
echo 'Using for loop <br>';
function computeSum($array) {
    $sum = 0;
    for($i = 0; $i < count($array); $i++) {
        $sum = $array[$i] + $sum;
    }
    return $sum;
}
$list = array(4, 8, 5,45, 34);
$total = computeSum($list);
 printf('Sum of the array is %d', $total);
echo '<br>';

echo 'Using while loop <br>';
function calculateSum($array) {
    $sum = 0;
    $i = 0;
    while($i < count($array)) {
        $sum = $array[$i] + $sum;
        $i++;
    }
    return $sum;
}
$calculateTotal = calculateSum($list);
printf('Sum of the array is %d', $calculateTotal);
