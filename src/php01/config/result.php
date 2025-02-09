<?php

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "私の名前は、" . $name . "<br />";
print "ご希望の商品は、" . $product . "<br />";
print "注文数は、" . $number;
