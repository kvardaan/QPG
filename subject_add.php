<?php
    include_once 'header.php';
    require_once 'include\dbh.inc.php';
    $colleges = "SELECT * FROM colleges";
    $colleges_qry = mysqli_query($conn, $colleges);
    // $session = "SELECT * FROM session";
    // $session_qry = mysqli_query($conn, $session);
?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Add<br>
                    <span style="font-size: 25px; color: #ff8239; text-decoration: underline;;">Subject</span>
                </h3>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                    <form action="include/subject_add.inc.php" method="post" class="my-1 mr-2">
                        <label class="my-1 mr-2" for="colleges">Select College</label><br>
                        <select class="form-control" id="colleges" name="college">
                            <option selected="" disabled="">Choose</option>
                            <?php
                            while ($row = mysqli_fetch_assoc($colleges_qry)) {
                                echo "<option value='" . $row["c_id"] . "'>" . $row["c_name"] . "</option>";
                            }
                            ?>
                        </select>

                        <br><label class="my-1 mr-2" for="programs">Select Program</label>
                        <select class="form-control" id="programs" name="program">
                        </select>

                        <br><label class="my-1 mr-2" for="branches">Select Branch</label>
                        <select class="form-control" id="branches">
                        </select>

                        <br><label class="my-1 mr-2" for="semester">Select Semester</label>
                        <select class="form-control" id="semester" name="semester">
                        </select>

                        <br><label for="floatingInput">Add Subject</label>
                        <input type="text" name="subjectid" class="form-control" id="floatingInput" placeholder="Enter Subject ID"  required/>
                        <br><input type="text" name="subject" class="form-control" id="floatingInput" placeholder="Enter Subject Name"  required/>

                        <br>
                        <div style="text-align: center;">
                            <button type="submit" name="add">Add</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

<?php
    include_once 'footer.php';
    $conn->close();
?>
