<?php
    include '../include/dbh.inc.php';
    // if (isset($_POST['program_data']) && isset($_POST['semester_data'])) {
    //     $p_id = $_POST['program_data'];
    //     $s_id = $_POST['semester_data'];

    //     $subject_query = "SELECT * FROM subject WHERE p_id = '$p_id' AND s_id = '$s_id'";
    //     $subject_result = mysqli_query($conn, $subject_query);

    //     echo '<option selected="" disabled="">Choose</option>';
    //     while ($row = mysqli_fetch_assoc($subject_result)) {
    //         echo "<option value='" . $row["sub_id"] . "'>" . $row["sub"] . "</option>";
    //     }
    //     echo $output;
    
    $s_id = $_POST['semester_data'];

    $subject = "SELECT * FROM subject WHERE s_id = $s_id";
    $subject_qry = mysqli_query($conn, $subject);

    $output = '<option selected="" disabled="">Choose</option>';
    while ($subject_row = mysqli_fetch_assoc($subject_qry)) {
        $output .= '<option value="' . $subject_row['sub_id'] . '">' . $subject_row['sub'] . '</option>';
    }
    echo $output;

?>