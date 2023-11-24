<?php
    include_once 'header.php';
    require_once 'include\dbh.inc.php';
    $colleges = "SELECT * FROM colleges";
    $colleges_qry = mysqli_query($conn, $colleges); 
?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3><span style="font-size: 1.2em;">Upload</span><br>
                    <span style="font-size: 1.5em; color: #ff8239; text-decoration: underline;;">Questions</span>
                </h3>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="my-1 mr-2" for="colleges">Select College</label><br>
                    <select class="form-control" id="colleges">
                        <option selected="" disabled="">Choose</option>
                        <?php 
                            while ($row = mysqli_fetch_assoc($colleges_qry)) {
                                echo "<option value='" . $row["c_id"] . "'>" . $row["c_name"] . "</option>";
                            } 
                        ?>                        
                    </select>

                    <br><label class="my-1 mr-2" for="programs">Select Program</label>
                    <select class="form-control" id="programs">
                    </select> 

                    <br><label class="my-1 mr-2" for="branches">Select Branch</label>
                    <select class="form-control" id="branches">
                    </select>

                    <br><label class="my-1 mr-2" for="semester">Select Semester</label>
                    <select class="form-control" id="semester">
                    </select>

                    <br><label class="my-1 mr-2" for="subject">Select Subject</label>
                    <select class="form-control" id="subject">
                    </select>

                    <br><form action="include\upload.inc.php" method="post" enctype="multipart/form-data">
                        <label for="excel">Upload Questions(*excel files only)</label>
                        <input type="file" name="excel" id="excel" accept=".xls, .xlsx, .csv" required>
                        <div style="text-align: center;">
                            <button type="submit" name="submit">Upload</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

<?php
    include_once 'footer.php';
    $conn->close();
?>