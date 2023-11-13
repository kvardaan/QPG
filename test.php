<?php


    if (isset($_POST['submit'])) {
        // User input for header details
        $course = $_POST['course']; // Replace with your form input names
        $branch = $_POST['branch'];
        $year = $_POST['year'];
        $subjectName = $_POST['subject_name'];
        $subjectCode = $_POST['subject_code'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';    

        // Create a new DOC file
        $docFile = fopen("question_paper.doc", "w");

        // Header section
        $header = "Course: $course\nBranch: $branch\nYear: $year\nSubject Name: $subjectName\nSubject Code: $subjectCode\n\n";
        fwrite($docFile, $header);

        // Number of questions to include in the paper
        $numQuestions = 10;

        // Retrieve random questions from the database
        $sql = "SELECT * FROM questions ORDER BY RAND() LIMIT $numQuestions";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Write questions to the DOC file
            while ($row = $result->fetch_assoc()) {
                fwrite($docFile, "Q: " . $row["question_text"] . "\n\n");
            }
        } else {
            echo "No questions found in the database.";
        }

        // Read MCQs from a DOC file (replace with your code to read DOC files)
        $mcqFile = "mcqs.doc";

        if (file_exists($mcqFile)) {
            $mcqContent = file_get_contents($mcqFile);
            fwrite($docFile, "\nMultiple Choice Questions:\n\n" . $mcqContent);
        } else {
            echo "MCQ file not found.";
        }

        fclose($docFile);
        $conn->close();
    }
    else{
        header("Location: ../dashboard.php?error=choice_error");
        exit();
    }
?>