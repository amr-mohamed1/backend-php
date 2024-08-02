<?php 
    ob_start();
    session_start();
    require_once("connect_db.php");
    require_once("Includes/functions/functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $password = @filter_var($_POST['password'],FILTER_SANITIZE_STRING);

        login($email,$password);
    }


    require_once("Includes/template/header.php");

?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" placeholder="Please Enter Your Email" name="email">
        <input type="password" placeholder="please Enter Your Password" name="password">
        <input type="submit">
    </form>


<?php
require_once("Includes/template/footer.php");
ob_end_flush();