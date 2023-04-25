<?php
session_start();
if(isset($_SESSION['email'])) {
    echo "Welcome to Dashboard page";
    echo "Email: " . $_SESSION['email'];
} else {
    echo "Welcome guest to Dashboard";
    echo "<a href='/PHP_tutorial/sessions.php'>Back to login</a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is dashboard</h1>
</body>
</html>