<?php
    require_once 'dbh.inc.php';

    if (isset($_POST['add'])) {
        $subjectId = mysqli_real_escape_string($conn, $_POST['subjectid']);
        $subjectName = mysqli_real_escape_string($conn, $_POST['subject']);
        $programId = mysqli_real_escape_string($conn, $_POST['program']);
        $semesterId = mysqli_real_escape_string($conn, $_POST['semester']);

        if (empty($subjectName) || empty($subjectId) || empty($programId) || empty($semesterId)) 
        {
            header("Location: ../subject_add.php?error=emptyfields");
            exit();
        } else {
            $insertSubjectQuery = "INSERT INTO subject (sub_id, sub, p_id, s_id) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $insertSubjectQuery)) {
                header("Location: ../subject_add.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "ssii", $subjectId, $subjectName, $programId, $semesterId);
                mysqli_stmt_execute($stmt);
                header("Location: ../subject_add.php?success=subjectadded");
                exit();
            }
        }
    } else {
        header("Location: ../subject_add.php");
        exit();
    }
?>
