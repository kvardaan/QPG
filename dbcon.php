
<?php

    $host = 'localhost:3307';

    $user = 'root';

    $password = 123;

    $database = 'qpg_project';
 

    $con = mysqli_connect($host, $user, $password, $database);
 

    if (!$con){

        ?>

            <script>alert("Connection Unsuccessful!!!");</script>

        <?php

    }
?>  