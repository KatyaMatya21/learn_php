<?php

// unixtime

// Задать часовую зону
date_default_timezone_set('Europe/Moscow');

// Получение даты
date($format, $timestamp = false);

// $format - задание формата

// d - день

// Y - год


// Пример 1

date_default_timezone_set('Europe/Moscow');

$curdate = date('d.m.Y H:i:s');

print('Когда я:' . $curdate);


// Пример 2

setlocale(LC_ALL, 'ru_RU');

$dow = strftime("%A");
print($dow);


// Пример 3

$curday = date('z');

$ydc = date('L') ? 366 : 365;

$days_remaining = $ydc - $curday;

print("До нового года осталось дней: $days_remaining");


// Пример 4

$ts = time();


// Пример 5

$int_end = "30 May 2018";

$end_ts = strtotime($int_end);
