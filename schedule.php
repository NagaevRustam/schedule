#!/usr/bin/env php

<?php
$months_name = [ 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' ];
echo $months_name[date('n') - 1] . PHP_EOL; // Выведет название месяца

function dates_month($month, $year):array {
    $num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $dates_month = array();

    for ($i = 1; $i <= $num; $i++) {
        $mktime = mktime(0, 0, 0, $month, $i, $year);
        $date = date("d-M-Y", $mktime);

        $get_name = date('l', strtotime($date)); // Получить день недели
        $day_name = substr($get_name, 0, 3); // Обрезать название дня до трёх символов

        $dates_month[$i] = "\033[31m $date \033[0m"; //Красный рабочий день
        if($day_name == 'Sun' || $day_name == 'Sat') {
            $dates_month[$i] = "\033[32m $date \033[0m"; //Зеленый нерабочий день
        }
    }
    return $dates_month;
}
print_r(dates_month(12, 2024));
?>