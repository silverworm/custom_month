<?php
/**
 * initiation new calendar counting
 */
class CALENDAR{
  public static $start_date = 1989;
  public static $day_in_week = 7;

  function day_in_month($num_month,$year_highness){
    $month_days = 0;
    print_r($num_month % 2);
    if($num_month % 2 == 0 || $num_month == 13 && $year_highness == false){
      $month_days = 21;
    }else{
      $month_days = 22;
    }
    return $month_days;
  }

  function year_highness($year){
    return $year_highness = (self::$start_date+$year) % 5;
  }

  function year_days_from_start($day,$month,$year){
    $count_year = $year - self::$start_date;
    $counted_days = 1;
    $first_year = $year - $count_year;
    for ($i_year=0; $i_year <= $count_year; $i_year++) {
      $days_per_year = 0;
      for ($i_month=1; $i_month < 14; $i_month++) {
        if($year == self::$start_date + $i_year && $month < $i_month || $year != self::$start_date + $i_year){
          $year_highness = self::year_highness($i_year);
          $days_per_year += self::day_in_month($i_month,$year_highness);
          print_r('expression_day_per_month'.self::day_in_month($i_month,$year_highness)."<br>");
        }else{
          $days_per_year += $day;
        }
      }
      $counted_days += $days_per_year;
      print_r('expression_day_per_year'.$days_per_year."<br>");
    }
    print_r($counted_days."<br>");
    print_r(floor($counted_days/7)*7);
    return  $counted_days - (floor($counted_days/7)*7) . "<br>";
  }

  function week_day_name($num_day){
    $day_names = ['Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'Monday'];
    if($num_day == 0){
      $num_day = 7;
    }
    // print_r($num_day);
    return $day_names[$num_day-1];
  }

}
?>