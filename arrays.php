<?php
echo "We talk about arrays<br>";
$some_numbers = [1, 3, 4, 5, 6, 7];
echo "<br/>";
// var_dump($some_numbers);
echo "<br/>";
// $fruits = ['pineapple', 'apple', 'watermelon'];
$fruits = array('pineapple', 'apple', 'watermelon');
// print_r($fruits);
// echo $fruits[2];
//associative array
$colors = [
    3 => 'red',
    5 => 'green',
    7 => 'blue',
    9 => 'yellow'
];
// echo $colors[5];
// key is a string
$hex_colors = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#0000FF',
];
// echo $hex_colors['red'];
$person = [
    'full_name' => 'Long Nguyen',
    'age' => '21',
    'email' => 'lavalshy2002@gmail.com',
    'address' => 'Ha Noi'
];
// print_r($person);
// echo $person['age'];
$people = [
    [
        'full_name' => 'Long Nguyen',
        'age' => '21',
        'email' => 'lavalshy2002@gmail.com',
        'address' => 'Ha Noi'
    ],
    [
        'full_name' => 'John Wick',
        'age' => '49',
        'email' => 'JW@gmail.com',
        'address' => 'US'
    ],
    [
        'full_name' => 'Bruh',
        'age' => '43',
        'email' => 'bruhlmao@gmail.com',
        'address' => 'Unknown'
    ]
];
// print_r($people);
// echo $people[1]['email'];
var_dump((json_encode($people)));