<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . "<br />";
}

$count = 0;

while ($count < 20) {
    $count += 1;
    echo $count . "<br />";
}

$number = 0;

while ($number <= 100) {
    if ($number === 20) {
        break;
    }
    if ($number % 3 === 0) {
        $number++;
        continue;
    }
    echo $number . "<br />";
    $number++;
}

$num = 0;
do {
    echo "num = " . $num . "<br />";
    $num += 1;
} while ($num < 3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
        echo $FizzBuzz . "<br />";
    } else if ($i % 3 == 0) {
        echo $Fizz . "<br />";
    } else if ($i % 5 == 0) {
        echo $Buzz . "<br />";
    } else {
        echo $i . "<br />";
    }
}

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "⚪️";
    }
    echo "<br />";
}