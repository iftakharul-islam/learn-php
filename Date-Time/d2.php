<?php
// echo date('H:i:s A'); A show antimeriden or post meriden big H  show 24 hour format

// echo date('dS/F/Y'); //dS show the suffix of the date and F show full day name Y show full year
$oneYear = 365;
$currentDay = date('z');
$dayLeftThisYear = $oneYear - $currentDay;
echo $dayLeftThisYear;