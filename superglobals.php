<?php
echo "Superglobals in PHP<br>";
// print_r($_SERVER);
// print_r($_GET);
// print_r($_POST);
// We will send data through url or form using $_GET / $_POST
// if(isset($_GET['name'])) {
//     echo($_GET['name']);
// }
// if(isset($_GET['age'])) {
//     echo($_GET['age']);
// }

//<script>alert('This is javascript code');</script>
$email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS); // coalescing
$password = htmlspecialchars($_POST['password']) ?? '';
// htmlspecialchars biến đoạn code trong thành string và không thực thi gì
echo $email;
echo $password;
// send this to DB, etc...
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>