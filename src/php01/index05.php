<?php
$a = 5;

if ($a === 5) {
echo "\$aは5です";
}
echo "\n\n";

$b = 7;

if ($b === 5) {
    echo "\$bは5です";
} else {
echo "\$bは5以外です";
}
echo "\n\n";

$c = 7;

if ($c === 5) {
echo "\$cは5です";
}elseif ($c === 7) {
echo "\$cは7です";
}else {
echo "\$cは5と7以外です";
}
echo "\n\n";

$people = "Saburo";

switch ($people) {
    case "Taro":
        echo "太郎です";
    break;
    case "Jiro":
        echo "次郎です";
    break;
    case "Saburo":
        echo "三郎です";
    break;
}
echo "\n\n";

$d = 7;
$e = ($d > 5) ? "TRUE" : "FALSE";
echo $e;