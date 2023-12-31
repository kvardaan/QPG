<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>QP Generator</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </head>
    <body>

        <nav>
            <!-- <a href="index.php"><img src="img/logo.png" alt=""></a>     -->
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