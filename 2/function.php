<?php

  // Встроенные функции


  // Строки

  // Дата и время

  // Работа с файлами

  // Математика

  // Запуск внешних программ

  // Графика

  // БД

  // Работа с архивами


  // Пользовательские

  function nameFunction() {
    // тело

    // мб
    return 1;
  }

  // Области видимости

  $one = 1;
  $two = 2;

  function test($one) {
    print($one);
    // print($two); // Не доступна внутри
  }


  // Пример

  $test = 2;

  function calculation($first, $second = 7) {
    // print($test); // Не доступна внутри
    $amount = $first + $second;
    return $amount;
  }

  $result1 = calculation(1, 2);

  $result2 = calculation(1);

  // print($amount); // Не доступна вне

  print($result1);

  print($result2);
