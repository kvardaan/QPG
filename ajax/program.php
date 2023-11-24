<?php
    include '../include/dbh.inc.php';
    $c_id = $_POST['college_data'];

    $program = "SELECT * FROM programs WHERE c_id = $c_id";
    $program_qry = mysqli_query($conn, $program);

    $output = '<option selected="" disabled="">Choose</option>';
    while ($program_row = mysqli_fetch_assoc($program_qry)) {
        $output .= '<option value="' . $program_row['p_id'] . '">' . $program_row['prog'] . '</option>';
    }
    echo $output;
?>