<?php
    // echo "String functions in PHP";
    $full_name = 'Nguyen Viet Long';
    // echo "length: " . strlen($full_name);

    // reverse a string
    // echo strrev($full_name);

    // convert to lowercase
    // echo strtolower($full_name);
    
    // convert to uppercase
    // echo strtoupper($full_name);

    // find and replace
    // echo str_replace(' ', '-', $full_name);
    if(str_starts_with(strtolower($full_name), 'nguyen')) {
        echo "His name starts with nguyen";
    }
    echo "<br/>";
    if(str_ends_with(strtolower($full_name), 'long')) {
        echo "His name end with long<br>";
    }
    echo "<h1>html string</h1>";
    // echo htmlspecialchars("<h1>html string</h1>");
    echo htmlspecialchars(("<script>alert('This is javascript code')</script>"));

    //htmlspeacialchars used to get data in form
    printf('<br>%s likes %s', 'Long', 'Mercedes Benz Silver Lightning');
    printf('<br>pi =%f', 3.141592);
