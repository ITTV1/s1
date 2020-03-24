<?php
# Анонимная функция в програмировании языке php
  $html = function (...$doc)
  {  
    foreach ($doc as $v) {
      echo "$v<br />\n"; // выводим элемент или значения
    }
  };
  // Вызов функции
  $html("css", "js", "php", "html");
?>
