<?php
    include_once 'include\header.php';
    require_once 'include\dbh.inc.php';
    $colleges = "SELECT * FROM colleges";
    $colleges_qry = mysqli_query($conn, $colleges);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Download<br>
                    <span style="font-size: 25px; color: #ff8239; text-decoration: underline;;">Question Paper</span>
                </h3>
            </div>
            <div class="col-md-4">
                
                <div class="form-group">
                    <label class="my-1 mr-2" for="colleges">Select College</label>
                    <br><select class="custom-select my-1 mr-sm-2" id="colleges">
                        <option selected="" disabled="">Choose</option>
                        <?php 
                            while ($row = mysqli_fetch_assoc($colleges_qry)) {
                                echo "<option value='" . $row["c_id"] . "'>" . $row["c_name"] . "</option>";
                            } 
                        ?>                        
                    </select>

                    <br><label class="my-1 mr-2" for="programs">Select Program</label>
                    <br><select class="custom-select my-1 mr-sm-2" id="programs">
                    </select> 

                    <br><label class="my-1 mr-2" for="branches">Select Branch</label>
                    <br><select class="custom-select my-1 mr-sm-2" id="branches">
                    </select>

                    <br><label class="my-1 mr-2" for="semester">Select Semester</label>
                    <br><select class="custom-select my-1 mr-sm-2" id="semester">
                    </select>

                    <br><label class="my-1 mr-2" for="subject">Select Subject</label>
                    <br><select class="custom-select my-1 mr-sm-2" id="subject">
                    </select>
                </div>
            </div>
        </div>
    </div>

    <script>
    //Program fetch using College
    $('#colleges').on('change', function() {    // with # insert the name of the field with which the next field has to be linked
        var c_id = this.value;
        $.ajax({
            url: 'ajax/program.php',
            type: "POST",
            data: {
                college_data: c_id
            },
            success: function(result) {
                $('#programs').html(result);    //change the name to the specific id for which the task is being performed
            }
        })
    });

    //Branch fetch using Program
    $('#programs').on('change', function() {    
        var p_id = this.value;
        $.ajax({
            url: 'ajax/branch.php',
            type: "POST",
            data: {
                program_data: p_id
            },
            success: function(result) {
                $('#branches').html(result); 
            }
        })
    });

    //Semester fetch using Branch
    $('#branches').on('change', function() {
        var b_id = this.value;
        $.ajax({
            url: 'ajax/semester.php',
            type: "POST",
            data: {
                branch_data: b_id
            },
            success: function(result) {
                $('#semester').html(result);
            }
        })
    });


</script>
<?php
    include_once 'include/footer.php';
    $conn->close();  // Close the database connection when done
?>