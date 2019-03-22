<?php
require 'class.Calendar.php';

$day = 17;
$month = 11;
$year = 2013;

// $day = 1;
// $month = 1;
// $year = 1991;

$CALENDAR = new CALENDAR();
$week_day_num = $CALENDAR->year_days_from_start($day,$month,$year);
print_r($CALENDAR->week_day_name($week_day_num));

?>