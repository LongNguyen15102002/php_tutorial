<?php
    // echo "We talk about Iterations <br/>";
    // for($i = 0; $i < 10; $i++) {
    //     // echo $i == 0 ? "$i" : ":$i";
    //     echo "i = $i<br>";
    // }
    $i = 0;
    // while($i < 20) {
    //     echo "i = $i<br>";
    //     //infinite loop
    //     $i = $i + 1;
    // }

    // do {
    //     echo "i = $i<br>";
    //     $i = $i + 1;
    // } while ($i < 30);

    //foreach
    $fruits = ['apple', 'pineapple', 'orange', 'lemon'];
    // for($i = 0; $i < count($fruits); $i++) {
    //     echo "$fruits[$i] <br>";
    // }

    // foreach ($fruits as $index => $fruit) {
    //     echo "$index - $fruit <br>";
    // }

    $person = [
        'fullname' => 'Nguyễn Việt Long',
        'email' => 'lavalshy2002@gmail.com',
        'age' => 21
    ];
    foreach($person as $key => $value) {
        echo "$key : $value <br>";
    }
