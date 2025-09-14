<?php
function text($number1, $number2) {
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 3);
echo $total;
?><br />
<?php
function point($score1, $score2, $score3) {
    $totalPoint = $score1 + $score2 + $score3;
    if ($totalPoint > 210) {
        echo $totalPoint . "点なので合格です";
    } else {
        echo $totalPoint . "点なので不合格です";
    }
}
echo (point(70, 80, 90));
?><br />
<?php
function squareArea($base, $height) {
    return $base * $height;
}
function triangleArea($base, $height) {
    return $base * $height / 2;
}
function trapezoidArea($lowerBase, $upperBase, $height) {
    return ($lowerBase + $upperBase) * $height / 2;
}
echo squareArea(5, 6) ."\n";
echo triangleArea(7, 8) ."\n";
echo trapezoidArea(3, 4, 5);