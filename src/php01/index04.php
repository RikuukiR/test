<?php

$a = 15;
$b = 3;
$c = 10;
$d = 5;

echo nl2br($a + $b);
echo "<br />";
echo nl2br($a - $b);
echo "<br />";
echo nl2br($a * $b);
echo "<br />";
echo nl2br($a / $b);
echo "<br />";
echo nl2br($a % $c);
echo "<br />";

echo $a = $b;
echo "<br />";
echo $c += $d;
echo "<br />";

$e = 20;
$f = 5;

echo ($e > $f);
echo "<br />";
echo ($e > 10 && $e < 30);
echo ($e > $f);
echo "<br />";

$g = 10;
$h = 10;
$i = 5;
$j = 5;

echo ($g++);
echo "<br />";
echo (++$h);
echo "<br />";
echo (--$i);
echo "<br />";
echo ($j--);
echo "<br />";
