<?php
    if(isset($_POST["submit"])){
        $userName = $_POST["userName"];
        $pwd = $_POST["pwd"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputLogin($userName, $pwd) !== false){
            header("Location: ../login.php?error=emptyinput");
            exit();            
        }
        if(invaliduserName($userName) !== false){
            header("Location: ../login.php?error=invaliduserName");
            exit();            
        }
        loginUser($conn, $userName, $pwd);
    }
    else{
        header("Location: ../login.php");
        exit();
    }
?>