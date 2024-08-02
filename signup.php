<?php 
    ob_start();
    session_start();
    require_once("connect_db.php");
    require_once("Includes/functions/functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = @filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $phone = @filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
        $password = @filter_var($_POST['password'],FILTER_SANITIZE_STRING);

        signup($name,$email,$phone,$password);

        // login($email,$password);
    }


    require_once("Includes/template/header.php");

?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" placeholder="Please Enter Your Name" name="name">
        <input type="email" placeholder="Please Enter Your Email" name="email">
        <input type="text" placeholder="Please Enter Your Phone" name="phone">
        <input type="password" placeholder="please Enter Your Password" name="password">
        <input type="submit">
    </form>


<?php
require_once("Includes/template/footer.php");
ob_end_flush();