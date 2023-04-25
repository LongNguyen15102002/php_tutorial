<?php
echo "File upload in PHP<br>";
if (isset($_POST['submit'])) {
    $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];
    $file_name = $_FILES['upload']['name'];
    if (!empty($file_name)) {
        // print_r($_FILES);
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $destination_path = "uploads/$file_name";
        $file_extension = explode('.', $file_name);
        $file_extension = strtolower(end($file_extension));
        // echo "$file_name, $file_size, $file_extension, $destination_path";
        // validate file extension permitted
        if (in_array($file_extension, $permitted_extensions)) {
            if ($file_size <= 100000000) {
                // ok, move from temp folder to /uploads
                move_uploaded_file($file_tmp_name, $destination_path);
                $message = '<p style = "color: green;">Upload successfully</p>';
            } else {
                $message = '<p style = color: red;">
                File is too large</p>';
            }
        } else {
            $message = '<p style = "color: red;">
            Invalid file type, try again</p>';
        }
    } else {
        $message = '<p style = color: red;">
        No file selected, try again</p>';
    }
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
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>
    " method="post" enctype="multipart/form-data">Choose image to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php $message ?? '' ?>
</body>

</html>