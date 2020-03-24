<?php
// Замыкание
  $mes = "Работа не может быть продолжена. Смотрите на ошибкик:<br />";
  $chek = function(array $errors) use ($mes)
  {
    if (isset($errors) && count($errors) > 0) {
      echo $mes;
      foreach($errors as $error) {
        echo "$error<br />";
      }
    }
  };

  $chek([]);

  $erorrs[] = "Заполните имя программиста";
  $chek($erorrs);
  // ...
  $mes = "Список требований программисту"; // Уже НЕЛЬЗЯ ИЗМЕНИТЬ
  $erorrs = ["PHP", "laravel", "redis"];
  $chek($erorrs);
?>
