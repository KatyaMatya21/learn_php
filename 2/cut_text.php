<?php

$text = 'Массив - это способ хранить в одной переменной множество значений.
В предыдущих примерах всегда имя переменной ассоциировалось только с одним значением.';

function cut_text($text, $num_letters) {
  $num = mb_strlen($text);

  if ($num > $num_letters) {
    $text = mb_substr($text, 0, $num_letters);
    $text .= "…";
  }

  return $text;
}

$result = cut_text($text, 25);

print ($result);
