<?php

echo "<pre>";
echo "<h2>Арифметические</h2>";
echo "<hr>сложение 3 + 4 будет ", 3 + 4;
echo "<hr>вычитание 3 - 4 будет ", 3 - 4;
echo "<hr>деление 3 / 4 будет ", 3 / 4;
echo "<hr>умножение 3 * 4 будет ", 3 * 4;
echo "<hr>целочисленный остаток от деления 3 % 4 будет ", 3 % 4;
echo "<hr>возведение в степень 3 ** 4 будет ", 3 ** 4;

echo "<h2>Строковые</h2>";
echo "<hr>склеивание строк 'Привет, ' . \"мир!\" будет ", 'Привет, ' . "мир!";

echo "<h2>Сравнения</h2>";
echo "<hr>равно 3 == 3 будет ", 3 == 3 ? 'true': 'false';
echo "<hr>не равно 3 <> 3 будет ", 3 <> 3 ? 'true': 'false';
echo "<hr>равно 3 == '3' будет ", 3 == '3' ? 'true': 'false';
echo "<hr>тождественно равно 3 === '3' будет ", 3 === '3' ? 'true': 'false';
echo "<hr>равно 3 == 5 будет ", 3 == 5 ? 'true': 'false';
echo "<hr>больше 3 > 5 будет ", 3 > 5 ? 'true': 'false';
echo "<hr>меньше 3 < 5 будет ", 3 < 5 ? 'true': 'false';
echo "<hr>меньше или равно 3 <= 5 будет ", 3 <= 5 ? 'true': 'false';
echo "<hr>больше или равно 3 >= 5 будет ", 3 >= 5 ? 'true': 'false';
echo "<hr>космический корабль (spaceship) 3 <=> 5 будет ", 3 <=> 5 ;
echo "<hr>космический корабль (spaceship) 8 <=> 5 будет ", 8 <=> 5 ;

echo "<h2>Оператор объединения с null</h2>";
echo "<hr>3 ?? 5 будет ", 3 ?? 5;
echo "<hr>NULL ?? 5 будет ", NULL ?? 5;

echo "<h2>Оператор подавления ошибок</h2>";
echo '<hr>@file(\'test\') ', @file('test');

echo "<h2>Оператор исполнения</h2>";
echo '<hr>`dir` ', `time`;



