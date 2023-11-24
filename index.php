<?php
    include_once 'header.php';
?>
            <?php
                if (isset($_SESSION["email"])){
                    echo <<<'HTML'
                        <section class='index-intro'>
                            <h1>Welcome to the Question Paper Generator</h1>
                            <p>A Question Paper Generator Project is a software application or system designed to create and generate question papers for various educational purposes, such as exams, quizzes, assessments, or practice tests. This type of project is typically used in educational institutions, including schools, colleges, and universities.</p>
                            <p>Below is a summary of the key features and components typically found in a Question Paper Generator Project:</p>
                            <ul>
                                <li>abcd</li>
                            </ul>
                        </section>
                        <section class="dashboard">
                            <div class="row mb-3">
                                <div class="col-md-6 text-center vertical-line">
                                    <a href="question_upload.php"><img src="img/upload.svg" alt="" width="40" height="40"></a>
                                    <br>
                                    <a href="question_upload.php">Upload Questions</a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <a href="qp_download.php"><img src="img/download.svg" alt="" width="40" height="40"></a>
                                    <br>
                                    <a href="qp_download.php">Download Question Paper</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 text-center vertical-line">
                                    <a href="branch_add.php"><img src="img/option.svg" alt="" width="40" height="40"></a>
                                    <br>
                                    <a href="branch_add.php">Add Branch</a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <a href="subject_add.php"><img src="img/journal-code.svg" alt="" width="40" height="40"></a>
                                    <br>
                                    <a href="subject_add.php">Add Subject</a>
                                </div>
                            </div>
                        </section>
                        <p class="blink" style="text-align: center;">Log In Successful!</p>
                    HTML;
                }
                else {
                    echo <<<'HTML'
                        <section class='index-intro'>
                            <h1>Welcome to the Question Paper Generator</h1>
                            <p>A Question Paper Generator Project is a software application or system designed to create and generate question papers for various educational purposes, such as exams, quizzes, assessments, or practice tests. This type of project is typically used in educational institutions, including schools, colleges, and universities.</p>
                            <p>Below is a summary of the key features and components typically found in a Question Paper Generator Project:</p>
                            <ul>
                                <li>abcd</li>
                            </ul>
                        </section>
                    HTML;
                }

            ?>
<?php
    include_once 'footer.php';
?>
