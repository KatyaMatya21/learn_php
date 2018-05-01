<?php

// Заменяет
htmlspecialchars();

// Режет
strip_tags();

function esc($str) {
  $text = htmlspecialchars($str);
  // или $text = strip_tags($str);

  return $text;
}
