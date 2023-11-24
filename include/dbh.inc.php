<?php
    //database details. You have created these details in the third step. Use your own.
    $servername = "127.0.0.1:3308";
    $username = "root";
    $password = "";
    $dbname = "qp_gen";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection if it is working or not
    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
?>