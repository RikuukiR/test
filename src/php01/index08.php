<?php

// $people = [
//     [
//         "last_name" => "Taro",
//         "age" => 25,
//         "gender" => "men"
//     ],
//     [
//         "last_name" => "Jiro",
//         "age" => 20,
//         "gender" => "men"
//     ],
//     [
//         "last_name" => "hinako",
//         "age" => 16,
//         "gender" => "women"
//     ],
// ];


// foreach ($people as $person => $age)


$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
