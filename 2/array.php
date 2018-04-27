<?php

  // Массивы


  // Добавление в конец
  $test1 = [];
  array_push($test1, '1');

  print($test1);

  print($test1[0]);

  $test2 = [];
  $test2[] = '2';

  print($test2[0]);


  // Что в массиве
  print_r($test2);  // информация о массиве для отладки

  var_dump($test2); // информация о массиве для отладки

  print(array_shift($test2));


  // первый элемент и удаление его
  array_pop($test2);


  // Из массива строка
  // implote(',', $test2);


  // Длина массива
  count($test2);


  // Перезапись добавление
  array_unshift($test2, '1');


  // Удаление элемента
  unset($test2[0]);


  // Есть ли элемент по индексу
  // isset($test2[3]); // boolean


  // по значению
  in_array('3', $test2);


  // последний элемент и удаление его
  array_shift($test2);


  // Объединение массивов
  array_merge($test1, $test2);


  // Сортировка и перезапись его же
  sort($test2);


//-------------------------------------------------------------

  // Ассоциативный массив (как объект)

  $arr = [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
  ];

  $arr = [
    'key1' => 1,
    'key2' => 2,
    'key3' => 3
  ];

  $arr['key4'] = 4;
  $arr['key5'] = 4;

  $arr['key5'] = $arr['key5'] + 1; // $arr['key5']++;

  print($arr['key4']);

  count($arr);

  // isset($arr['key1']);

  sort($arr);

//-------------------------------------------------------------

  // Двумерный массив

  $array = [
    0 => [
      'key1' => 1,
      'key2' => 2,
      'key3' => 3
    ],
    1 => [
      'key1' => 1,
      'key2' => 2,
      'key3' => 3
    ],
    2 => [
      'key1' => 1,
      'key2' => 2,
      'key3' => 3
    ]
    ];

  print($array[0]['key1']);

  $index = array_rand($array); // рандомный индекс
