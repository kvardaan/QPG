<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>QP Generator</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <nav>
            <img src="img/logo.png" alt="">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php
                        if (isset($_SESSION["email"])){
                            echo "<li><a href = 'dashboard.php'>Dashboard</a></li>";
                            echo "<li><a href = 'include\logout.inc.php'>Logout</a></li>";
                        }
                        else{
                            echo "<li><a href='signup.php'>Sign Up</a></li>";                           
                            echo "<li><a href='login.php'>Log In</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>

        <div class="wrapper">