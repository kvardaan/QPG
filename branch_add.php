<?php
    include_once 'header.php';
    require_once 'include/dbh.inc.php';

    $colleges = "SELECT * FROM colleges";
    $colleges_qry = mysqli_query($conn, $colleges);
?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3><span style="font-size: 1.2em;">Add</span><br>
                    <span style="font-size: 1.5em; color: #ff8239; text-decoration: underline;;">Branch</span>
                </h3>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <form action="include/branch_add.inc.php" method="post" class="my-1 mr-2">
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

                        <br><label for="floatingInput">Add Branch</label>
                        <input type="text" name="branch" class="form-control" id="floatingInput" placeholder="Enter Branch Name" />
                        <br>
                        <div style="text-align: center;">
                            <button type="submit" name="add">Add</button>
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
