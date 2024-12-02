#!/usr/bin/env php

<?php
//declare(strict_types = 1);

$date = date_create_from_format('Y-m-d', '2024-12-01');
date_modify($date, '+1 month');
var_dump(date_format($date, 'Y-m-d'));
echo $date_format = date_format($date, 'Y-m-d') . PHP_EOL;

?>