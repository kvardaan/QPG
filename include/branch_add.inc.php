<?php
    require_once 'dbh.inc.php';

    if (isset($_POST['add'])) {
        // Get data from form
        $branchName = mysqli_real_escape_string($conn, $_POST['branch']);
        $programId = mysqli_real_escape_string($conn, $_POST['program']);

        // Validate input
        if (empty($branchName) || empty($programId)) {
            // Handle empty input
            header("Location: ../branch_add.php?error=emptyfields");
            exit();
        } else {
            // Insert branch into the database
            $insertBranchQuery = "INSERT INTO branch (branch, p_id) VALUES (?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $insertBranchQuery)) {
                // Handle SQL error
                header("Location: ../branch_add.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "si", $branchName, $programId);
                mysqli_stmt_execute($stmt);
                // Handle successful insertion
                header("Location: ../branch_add.php?success=branchadded");
                exit();
            }
        }
    } else {
        // Redirect to the form page if the form is not submitted
        header("Location: ../branch_add.php");
        exit();
    }
?>