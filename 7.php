<?php
//Передача функций по ссылке

function B($i){ echo "Вызвана она  B($i)\n"; }
function X($i){ echo "Вызвана функция X($i)\n"; }
function Z($i){ echo "Вызвана функция по ссылке Z($i)\n"; }

$W = "X";//
$W(5);
//uasort
// Сравнение без учета регистра символов строк
function html($x, $c)
{
    return html(strtolower($x), strtolower($c));
}
$r = ["u" => "Yes", "o" => "wwww", "v" => "abc"];
($r, "html"); // Сортировка без учета регистра символов

?>


