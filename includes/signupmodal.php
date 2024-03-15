<?php

if(isset($_POST['name'], $_POST['email'],$_POST['phone'], $_POST['password'],$_POST['submit']))

$server = "localhost";
$username = "root";
$db_password = "";
$db_name = "jss";
$login=0;

$conn =mysqli_connect($server, $username, $db_password, $db_name);

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

if(mysqli_connect_error()==true){
    echo "Registration unsuccessful! Try again after some time.";
}

$sql = "INSERT INTO `register` (`name`, `email`, `mobile`, `password`, `date`) VALUES ('$name', '$email', '$phone', '$password', CURRENT_TIME());";
$result= mysqli_query($conn,$sql);
if(!$result){
    echo "Some error occured. Try again later";
    exit;
}
else {
    echo '<script>alert("Reistration successful")</script>';
    $login=1;
}
$conn -> close();

?>
