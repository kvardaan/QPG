<?php

    function emptyInputSignup($name, $userName, $email, $pwd, $cpwd){
        $result;
        if(empty($name) || empty($userName) || empty($email) || empty($pwd) || empty($cpwd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invaliduserName($userName){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function pwdMatch($pwd, $cpwd){
        $result;
        if($pwd !== $cpwd){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function userNameExists($conn, $userName, $email){
        $sql = "SELECT * FROM signup_form_entries WHERE userName = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);
        $result;
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ss", $userName, $email);
        mysqli_stmt_execute($stmt);
        
        $resultData = mysqli_stmt_get_result($stmt);
        
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $name, $userName, $email, $pwd){
        $sql = "INSERT INTO signup_form_entries (name, userName, email, pwd) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=stmtfailed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"ssss", $name, $userName, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../signup.php?error=none");
            exit();
    }

    function emptyInputLogin($userName, $pwd){
        $result;
        if(empty($userName)|| empty($pwd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $userName, $pwd) {
        // Check if the email exists in the database
        $userExists = userNameExists($conn, $userName, $email);
    
        if ($userExists === false) {
            // User not found, redirect with an error message
            header("location: ../login.php?error=incorrectlogin");
            exit();
        }
    
        // Verify the provided password with the hashed password from the database
        $hashedPwd = $userExists["pwd"];
        $checkPwd = password_verify($pwd, $hashedPwd);
    
        if ($checkPwd === false) {
            // Password is incorrect, redirect with an error message
            header("location: ../login.php?error=incorrectlogin");
            exit();
        } else if ($checkPwd === true) {
            // Password is correct, start a session and redirect to the main page
            session_start();
            $_SESSION["email"] = $userExists["email"];
            header("location: ../index.php");
            exit();
        }
    }

?>