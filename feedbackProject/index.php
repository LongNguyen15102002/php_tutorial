<?php
require 'components/header.php';
$name = $email = $body = '';
$name_error = $email_error = $body_error = '';
if (isset($_POST['submit'])) {
    //validations
    if (empty($_POST['name'])) {
        $name_error = "Name is required";
    } else {
        $name = htmlspecialchars($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $name_error = "Email is required";
    } else {
        $name = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    if (empty($_POST['body'])) {
        $name_error = "Body is required";
    } else {
        $name = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
?>
<h1>Enter your feedback here</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="What's your name ?">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="email" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="feedback" placeholder="Enter your feedback" rows="2"></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn-btn-primary" name="submit" value="Send">
    </div>
</form>
<?php include 'components/footer.php'; ?>