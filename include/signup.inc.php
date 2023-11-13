<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $userName = $_POST["userName"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $cpwd = $_POST["cpwd"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputSignup($name, $userName, $email, $pwd, $cpwd) !== false){
            header("Location: ../signup.php?error=emptyinput");
            exit();            
        }
        if(invaliduserName($userName) !== false){
            header("Location: ../signup.php?error=invaliduserName");
            exit();            
        }
        if(invalidEmail($email) !== false){
            header("Location: ../signup.php?error=invalidemail");
            exit();            
        }
        if(pwdMatch($pwd, $cpwd) !== false){
            header("Location: ../signup.php?error=passwordsdontmatch");
            exit();            
        }
        if(userNameExists($conn, $userName, $email) !== false){
            header("Location: ../signup.php?error=userNametaken");
            exit();
        }

        createUser($conn, $name, $userName, $email, $pwd);
    }
    else{
        header("Location: ../signup.php");
        exit();
    }
?>