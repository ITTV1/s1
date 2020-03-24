<?php

//call_user_func()
function z($i) { echo "Вызвана  функция z($i)\n"; }
function w($i) { echo "Вызвана функция w($i)\n"; }
function c($i) { echo "Вызвана  функция c($i)\n"; }
$t = "w";
call_user_func($t, 11); // вызов функции, имя которой хранится в $t

?>


