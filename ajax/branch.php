<?php
    include '../include/dbh.inc.php';
    $p_id = $_POST['program_data'];

    $branch = "SELECT * FROM branch WHERE p_id = $p_id";
    $branch_qry = mysqli_query($conn, $branch);

    $output = '<option value="">Choose</option>';
    while ($branch_row = mysqli_fetch_assoc($branch_qry)) {
        $output .= '<option value="' . $branch_row['b_id'] . '">' . $branch_row['b_name'] . '</option>';
    }
    echo $output;