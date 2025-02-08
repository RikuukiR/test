<?php

for ($i = 1; $i  <= 5; $i++) {
    echo $i * 2 . "<br />";
}

echo "<br />";

$i = 1;

while ($i <= 20) {
    echo $i . "<br />";
    $i++;
}

echo "<br />";

$count =0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0){
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;
}

echo "<br />";

$num = 0;

do {
    echo "num = " . $num . "<br />";
    $num++;
}while ($num < 3);

echo "<br />";

for($x = 1; $x <= 50; $x++) {
    if ($x % 15 === 0){
        echo "FizzBuzz" . "<br />";
    }elseif ($x % 3 === 0){
        echo "Fizz" . "<br />";
    }elseif ($x % 5 === 0){
        echo "Buzz" . "<br />";
    }else
        echo $x . "<br />";
}

echo "<br />";

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}

