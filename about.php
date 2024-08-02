<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['user_email'])){
        header("Location:login.php");
    }

    require_once("Includes/template/header.php");
?>

    <h3>Welcome Back You Are Loggin Now mr. <?php echo $_SESSION['user_email'] ?></h3>


    <a href="logout.php">Logout</a>



<?php
require_once("Includes/template/footer.php");
ob_end_flush();