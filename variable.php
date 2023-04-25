<?php
// echo 'We talk about variables' . '</br>';
$name = 'Long Nguyen'; //String
// echo $name;
$age = 21; //Integer
// '<br/>';
// echo $age;
$has_car = 'false';
// echo $has_car;
var_dump($has_car);
$product_price = 10.7;
var_dump($product_price);
// echo $name.' is '.$age.' years old'."</br>";
// cách nhanh hơn để nối xâu
// echo "<br/>";
// echo "$name is $age years old...";
// echo "</br>";
//expression
// echo '1' + '2';
$sum = '2' + '3';
var_dump($sum);
// echo 5 * 3;
// echo 1/0;
echo 10/3;
echo "<br/>";
//constants
define('SERVER_NAME', 'localhost');
define('DATABASE_NAME', 'test_db');
echo "server: ".SERVER_NAME.', db : '.DATABASE_NAME;
?>