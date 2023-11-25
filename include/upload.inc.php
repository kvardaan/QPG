<?php
// Include the database connection
require_once 'dbh.inc.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the selected subject ID from the dropdown
    $subject_id = isset($_POST['subject']) ? $_POST['subject'] : null;
    echo "Subject ID: $subject_id";

    // Check if a file was uploaded without errors
    if ($_FILES['excel']['error'] == UPLOAD_ERR_OK) {
        // Get file details
        $file_name = $_FILES['excel']['name'];
        $file_tmp = $_FILES['excel']['tmp_name'];

        // Check if the file is an Excel file
        $allowed_extensions = array('xls', 'xlsx', 'csv');
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (in_array($file_extension, $allowed_extensions)) {
            // Load the Excel file using PhpSpreadsheet
            require_once '../vendor/autoload.php'; // Adjust the path accordingly

            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_tmp);
            $worksheet = $spreadsheet->getActiveSheet();

            // Get the highest row number in the worksheet
            $highestRow = $worksheet->getHighestRow();

            // Loop through rows starting from the second row (index 2)
            for ($rowIndex = 2; $rowIndex <= $highestRow; ++$rowIndex) {
                // Get cell values for the current row
                $question = $worksheet->getCell('A' . $rowIndex)->getValue(); // Assuming 'A' is the column for questions
                $max_mark = $worksheet->getCell('B' . $rowIndex)->getValue(); // Assuming 'B' is the column for max_marks

                // Insert data into the 'question' table
                $insert_query = "INSERT INTO question (question, max_mark, sub_id) VALUES ('$question', '$max_mark', '$subject_id')";
                mysqli_query($conn, $insert_query);
            }

            // Close the Excel file
            $spreadsheet->disconnectWorksheets();
            unset($spreadsheet);

            // Close the database connection
            $conn->close();

            // Display success message
            header("Location: ../question_upload.php?success=1");
            exit();
        } else {
            echo "Invalid file format. Please upload a valid Excel file.";
        }
    } else {
        echo "Error uploading file. Please try again.";
    }
} else {
    // Redirect or display an error message if the form was not submitted
    header("Location: ../question_upload.php");
    exit();
}
?>
