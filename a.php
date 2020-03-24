<?php
# Передача анонимной функции в качестве параметра.
  function html($la, $echo, ...$langs)
  {
    // Подготавливаем аргументы для html().
    $net = [];
    foreach ($langs as $lang) {
      $net[] = str_repeat("&nbsp;", $la).$lang;
    }
    // Пользовательский вывод задается из вне
    $echo(...$net);
  }

  // Массив для вывода
  $languages = ["css", "js", "php", "html"];
  // отображаем строки одну под другой
  html(25, function(...$key) {
    foreach ($key as $v) {
      echo "$v<br />\n";
    }
  }, ...$languages);
?>
