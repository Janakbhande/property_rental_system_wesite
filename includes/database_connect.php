<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "JSS");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
?>