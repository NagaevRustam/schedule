#!/usr/bin/env php

<?php
//declare(strict_types = 1);

//$date = date_create_from_format('Y-m-d', '2024-12-01');
//date_modify($date, '+1 month');
//var_dump(date_format($date, 'Y-m-d'));
//echo $date_format = date_format($date, 'Y-m-d') . PHP_EOL;

$date = DateTime::createFromFormat('Y-m-d', '2024-12-01');
$date->modify('+1 month');
echo $date->format('d-m-Y') . PHP_EOL;

$months_name = [ 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря' ];
// Массив с названиями месяцев
echo date('d '.$months_name[date('n') - 1]); // Выведет день и название месяца на русском языке
echo '' . PHP_EOL;
echo $months_name[date('n') - 1] . PHP_EOL; // Выведет только название месяца на русском языке

$workdays = array();
$type = CAL_GREGORIAN;
$month = date('n'); // Идентификатор месяца (от 1 до 12).
$year = date('Y'); // Год в четырёхзначном формате 2024 года.
//$day_count = cal_days_in_month($type, $month, $year); // Получить количество дней

//for ($i = 1; $i <= $day_count; $i++) {
    for ($i = 1; $i <= 1; $i++) {
    $date = $year.'/'.$month.'/'.$i; // Отформатировать дату
    $get_name = date('l', strtotime($date)); // Получить день недели
    $day_name = substr($get_name, 0, 3); // Обрезать название дня до трёх символов
    if($day_name != 'Sun' && $day_name != 'Sat'){
        $workdays [] = $i;
    }
}
print_r($workdays);

echo "\033[31m красный \033[0m";
echo "\033[32m зелёный \033[0m";

cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
date('t');
?>