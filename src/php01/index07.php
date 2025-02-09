<?php

function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 3);
echo $total;

echo "<br />";

function totalScore($score1, $score2, $score3){
    $add = $score1 + $score2 + $score3;
    if ($add > 210){
        echo "合計点は " . $add . " 点なので合格です" . "<br />";
    }else{
        echo "合計点は " . $add . " 点なので不合格です" . "<br />";
    }
    return $add ;
}

totalScore(80, 60, 50);

echo "<br />";

// $bottom = $high = $vertical = $width = $top = 2;

// function triangle ($bottom, $high){
//     $area = $bottom * $high / 2;
//     return $area;
//     echo $area;
// }
// echo "<br />";

// function rectangle ($vertical, $width){
//     $area = $vertical * $width;
//     return $area;
//     echo $area;
// }
// echo "<br />";

// function trapezoid ($top, $bottom, $high){
//     $area = ($top + $bottom) * $high / 2;
//     return $area;
//     echo $area;
// }
// echo "<br />";


function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

