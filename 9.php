<?php
//return
$l = 15;
function r() {
    global $l; // объявляет $l глобальной
    return $l; // возвращает значение, а не ссылку!
}
$x = r();
$x = 2;
// присваивает $x, а не $l!
echo $l; // выводит 15
?>


