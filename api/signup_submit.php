<?php
session_start();
require("..includes/database_connect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password = sha1($password);

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$sql);
if (!$result) {
    echo "something went wrong";
    exit;
}

$row_count = mysqli_num_rows($result);
if($row_count != 0) {
    echo "This email id is already registered with us!.";
    exit;
}

$sql = "INSERT INTO `register` (`name`, `email`, `mobile`, `password`, `date`) VALUES ('$name', '$email', '$phone', '$password', CURRENT_TIME());";
$result = mysqli_query($conn,$sql);
if (!$result) {
    echo "something went wrong";
    exit;
}

echo "Your accont is successfully created!";
?>
click <a href="../index.php">here</a> to continue.
<?php
mysqli_close($conn);
?>