 <?php

    session_start();

    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $name = $_SESSION['name'];
    }

        // $user_id = $_COOKIE['user_id'];
        // $name = $_COOKIE['name'];
        echo "Hello" .$name;

 ?>

 <a href="logout.php">logout</a>



 