<?php

  // Циклы


  $i = 10;

  while ($i>0) {
    print($i);
    $i--;
  }


  // Для перебора массивов
  $qwerty = [0, 1, 2, 3, 4, 5];

  foreach ($qwerty as $key => $val) {
   print($key);
   print($val);
   print('<br>');
  }
