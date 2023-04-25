<?php
// echo "We talk about conditionals in PHP <br/>";
// $age = 21;
// if($age >= 18) {
//     echo "You are older than 18 years old";
// } else {
//     echo "You are younger than 18 years old";
// }
// $date_time = date("F j");
// echo $date_time;

// $hours = 19.2;
// echo $hours. "<br/>";
// if ($hours < 12) {
//     echo "Good morning";
// } else if ($hours < 17) {
//     echo "Good afternoon";
// } else if ($hours < 22) {
//     echo "Good evening";
// } else {
//     echo "Good night";
// }

$comments = [
    'Ccjz', 'Weo', 'Jztr'
];
// if(!empty($comments)) {
//     echo "There are some comments";
// } else {
//     echo 'No comments';
// }
// echo !empty($comments) ? "There are some comments" : "No comments";

// $first_comment = !empty($comments) ? $comments[0] : 'No comments';
// echo $first_comment;

//coalescing operator (toán tử lấy giá trị mặc định)
// $first_comment = $comments[0] ?? 'No comments';
// echo $first_comment;

$favorie_color = 'red';
switch($favorie_color) {
    case 'red':
        echo 'You choose RED';
        break;
    case 'green':
        echo 'You choose GREEN';
    case 'blue':
        echo 'You choose BLUE';
    default:
        echo 'Not RED, GREEN, BLUE';
}
