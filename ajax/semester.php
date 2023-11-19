<?php
    include '../include/dbh.inc.php';
    $b_id = $_POST['branch_data'];

    $semester = "SELECT * FROM semester WHERE b_id = $b_id";
    $semester_qry = mysqli_query($conn, $semester);

    $output = '<option selected="" disabled="">Choose</option>';
    while ($semester_row = mysqli_fetch_assoc($semester_qry)) {
        $output .= '<option value="' . $semester_row['s_id'] . '">' . $semester_row['s_name'] . '</option>';
    }
    echo $output;