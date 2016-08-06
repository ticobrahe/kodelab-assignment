<?php
//Next 20 Leap years 
$datetime = new DateTime();
$interval = new DateInterval("P1Y");
$period = new DatePeriod($datetime, $interval, 4);
foreach($period as $date) {
    if((bool)$date->format('L')) {
        $leapYear = $date->format('Y');
        printf( 'The current leap year is: %d <br>', $leapYear);
        break;
    }
}
for ($i = 1; $i <= 19; $i++) {
    $LeapCount = 4 * $i;
    $getYear = $leapYear + $LeapCount;
    printf('%d is a leap year <br>', $getYear) ;
}