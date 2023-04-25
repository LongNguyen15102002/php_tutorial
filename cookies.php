<?php
echo "Cookies in PHP<br>";
/*
    Cookies: - save data in remote browser 
    - You can retrieve it when the user visit the site again
*/
// save data to remote browser
setcookie('name', 'Long', time() + 24*3600);
// after 1 day, cookie will be expired
// check the existing cookie
if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}
// setcookie('name', '', time() - 24*3600); // unset cookie