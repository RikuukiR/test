<?php

$a =5;

if ($a === 5) {
    echo "\$aは5です";
}
echo "<br />";

$b = 7;

if ($b === 5) {
    echo "\$bは5です";
}else {
    echo "\$bは5以外です";
}
echo "<br />";

if ($b === 5) {
    echo "\$bは5です";
} elseif($b === 7) {
    echo "\$bは7です";
}else{
    echo "\$bは5と7以外です";
}
echo "<br />";

$people = "Saburo";

switch ($people) {
    case $people:
        echo "三郎です";
        break;
    case $people:
        echo "四郎です";
        break;
    default:
        echo "三郎でも四郎でもありません";
        break;
}
echo "<br />";

$result = ($b ===7) ? "TRUE" : "FALSE";
echo $result;
echo "<br />";