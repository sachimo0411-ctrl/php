<?php
$a =15;
$b =3;
$c =10;
$d =5;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;
echo "<br />";

$a = $b;
$c += $d;

echo $a;
echo "<br />";
echo $c;
echo "<br />";

$e =20;
$f =5;

echo ($e > $f);
echo "<br />";

echo ($e > 10 && $e < 30);
echo "<br />";

$g = $h = 10;
$i = $j = 5;

echo ++$g;
echo "<br />";
echo $h++;
echo "<br />";
echo --$i;
echo "<br />";
echo $j--;
echo "<br />";