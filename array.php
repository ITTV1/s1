<?php
//mixed call_user_func_array(string $имя_функции, array $аргументы)
## Использование call_user_func_array().
  function html(...$key)
  {  
    foreach ($key as $v) {
      echo "$v<br />\n"; // выводим элемент
    }
  }
  // То же самое, но предваряет параметры указанным числом пробелов.
  function css($lanv, ...$langs)
  {
    // Подготавливаем аргументы для html().
    $new1 = [];
    foreach ($langs as $lang) {
      $new1[] = str_repeat("&nbsp;", $lanv).$lang;
    }
    // Вызываем myecho() с новыми параметрами.
    call_user_func_array("html", $new1);
  }
  // отображаем строки одну под другой
  css(50, "css", "js", "php", "html");
?>
