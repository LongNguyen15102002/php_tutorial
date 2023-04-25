<?php
// $y = 213;
// echo "This is about functions";
//function is a "block of code", with name
function sayHello($name) { //function with "arguments"
    global $y;
    echo "y = $y";
    $x = 12;
    echo "Hello $name";
}
// echo "x = $x"; //biến x là local ở trong function

// sayHello('Long Nguyen'); //call function with "parameters"
// function sum($a, $b) {
//     return $a + $b;
// }
// echo sum(1,70);

// assign a variable to a function
// $multiply = function ($a, $b) {
//     return $a * $b;
// };
// echo $multiply(3, 6);

// arrow function
// $substract = fn($a, $b) => $a - $b;
// echo $substract(5, 8);

// some built-in function for array
$names = ['Long Nguyễn', 'Josh', 'Thảo'];
// echo "number of items: ".count($names);

// search inside array
// var_dump((in_array('elon', $names)));

// insert at the end of the array
array_push($names, 'Elon', 'John');

// insert to the beginning of the array 
array_unshift($names, 'Anna', 'Elise');


// remove the last item
array_pop($names);

// remove the first item
array_shift($names);

// how to remove an item
unset($names[3]);

print_r(($names));

// chunk an array

$chunked_array = array_chunk($names, 3);
// print_r($chunked_array);

// merge array
$array_one = [1,3,5];
$array_two = [2,4,6];
$merged_array = array_merge($array_one, $array_two);
print_r($merged_array);

// spread opertator 
$array_three = [...$merged_array]; // clone an array
$array_three[0] = 122;
print_r($array_three); // nhân bản array cho phép sửa dữ liệu trong array mới 
                       // mà k bị ảnh hưởng đến array đc nhân bản 

// merge and clone
$array_four = [...$array_one, ...$array_two];
print_r($array_four);

// combine two arrays
$a = ['name', 'email', 'age'];
$b = ['Long Nguyễn', 'lavalshy2002@gmail.com', 21];
$c = array_combine($a, $b);
// print_r($c); // array a và b phải có cùng độ rộng thì mới combine được
print_r(array_keys($c)); // get key of array
print_r(array_values($c)); // get value of array
// print_r(array_flip($c)) -> đảo ngược key và value

$numbers = range(0, 15);
print_r($numbers);

// map an array to another array
// with the same size, but other values

$squared_numbers = array_map(function($each_number) {
    return $each_number * $each_number;
}, $numbers);
print_r($squared_numbers);

// filter an array
$filter_numbers = array_filter($squared_numbers, 
            fn($each_number) => $each_number % 2 == 0);
print_r($filter_numbers);
