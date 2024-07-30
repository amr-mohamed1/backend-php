<?php
$username = null;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // 1- get -> $_GET['name_of_the_input']
    // 2- post -> $_POST['name_of_the_input']

    $username = $_POST['user_name'] . "<br>";
    echo $_POST['email'] . "<br>";
    echo $_POST['password'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" name="user_name">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit">
    </form>


    <?php if(isset($username)){ ?>

        <h3><?php echo $username ?></h3>

    <?php } ?>

</body>
</html>