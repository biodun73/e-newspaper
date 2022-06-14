<?php

class Date {
    public $day;
    public $month;
    public $year;
    public function formatDmy() {
   return $this->day . '/' . $this->month . '/' . $this->year;
    }
 
    public function formatMySQL() {
   return $this->year . '-' . $this->month . '-' . $this->day;
    }
    
}
$date = new Date();
$date->day='04';
$date->month = '05';
$date->year = '2012';
echo $date->formatDmy();



?>
