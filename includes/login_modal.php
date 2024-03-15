
<?php

session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "JSS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the user's credentials
    $sql = "SELECT * FROM register WHERE (email = '$email' OR mobile='$email') AND password = '$password'";
    $result = $conn->query($sql);

    $row=mysqli_fetch_assoc($result);

    if ($result->num_rows == 1) {
        // Successful login
        echo "Hello, " .$row['name'] ."<br/>";

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];

        // setcookie("user_id",$row['id'],time()+3600);
        // setcookie("name",$row['name'],time()+3600);
       
         echo '<a href="addrent.php">CLICK HERE</a>';
         include "..\index.php";

    } else {
        // Invalid credentials
        echo "Invalid username or password!";
    }
}
?>