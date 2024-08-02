<?php 
    function login($email,$pass){
        global $con;
        $stmt = $con->prepare("SELECT * FROM users where email=? and password=?");
        $stmt->execute(array(
            $email,
            md5($pass),
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();
        if($count > 0){
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_phone'] = $row['phone'];
            echo $row['name'] . "You are Logged In Successfully";
            header("refresh:3;url=about.php");
        }else{
            echo "Your Password or Email is Incorrect";
            header("refresh:3;url=login.php");
        }
        
        
    }

    function signup($name,$email,$phone,$password){
        global $con;
        $stmt = $con->prepare("INSERT INTO users(name,email,phone,password) Values(:user_name,:user_email,:phone,:pass)");

        $stmt->execute(array(
            ":user_name" => $name,
            ":user_email" => $email,
            ":phone" => $phone,
            ":pass" => md5($password),
        ));

        echo "<script>
        alert('Your Data Added Successfully')
        </script>";
        header('refresh:3;url=login.php');
    }