<?php
    include '../include/dbh.inc.php'; // Adjust the path as needed
    $p_id = $_POST['program_data'];

    // Fetch program duration from the database
    $program_duration_query = "SELECT p_duration FROM programs WHERE p_id = $p_id";
    $program_duration_result = mysqli_query($conn, $program_duration_query);
    $program_duration_row = mysqli_fetch_assoc($program_duration_result);
    $program_duration = $program_duration_row["p_duration"];

    // Fetch semesters based on session and program duration
    $semester_query = "SELECT * FROM semester WHERE p_duration = $program_duration";
    $semester_result = mysqli_query($conn, $semester_query);

    echo '<option selected="" disabled="">Choose</option>';

    while ($row = mysqli_fetch_assoc($semester_result)) {
        echo "<option value='" . $row["s_id"] . "'>" . $row["sem"] . "</option>";
    }
?>