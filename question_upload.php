<?php
    include_once 'include\header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Upload Your<br>
                    <span style="font-size: 25px; color: #ff8239; text-decoration: underline;;">Questions</span>
                </h3>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="form-group">
                        <label class="my-1 mr-2" for="colleges">Select College</label>
                        <br>
                        <select class="custom-select my-1 mr-sm-2" id="colleges">
                            <option selected="" disabled="">Choose</option>
                            <option value="1">School of Technology</option>
                            <option value="2">School of Business</option>
                            <option value="3">School of Graduate Studies</option>
                            <option value="4">School of Agricultural Studies</option>
                            <option value="5">School of Media Studies &amp; Design</option>
                            <option value="6">School of Health Sciences</option>
                            <option value="7">School of Hospitality &amp; Tourism</option>
                            <option value="8">School of Law</option>                        
                        </select>
                    </div>
                </div>
                <!-- programs select -->
                <div id="program_select">
                    <div class="form-group">
                        <label class="my-1 mr-2" for="programs">Select Programs</label>
                        <br>
                        <select class="custom-select my-1 mr-sm-2" id="programs">
                            <option selected="" disabled="">Choose...</option>
                            <option value="1" class="program_option">B.Tech</option>
                            <option value="3" class="program_option">BCA</option>
                            <option value="9" class="program_option">Diploma</option>
                            <option value="4" class="program_option">M.Tech</option>
                            <option value="35" class="program_option">MCA</option>
                        </select>
                    </div>
                </div>
                <!-- branch select -->
                <div id="branch_select">
                    <div class="form-group">
                        <label class="my-1 mr-2" for="branches">Select Branch</label>
                        <br>
                        <select class="custom-select my-1 mr-sm-2" id="branches">
                            <option selected="" disabled="">Choose...</option>
                            <option value="12" class="program_option">CSE</option>
                            <option value="13" class="program_option">CE</option>
                            <option value="14" class="program_option">EE</option>
                            <option value="15" class="program_option">ME</option>
                        </select>
                    </div>
                </div>
                <!-- semester select -->
                <div id="semester_select">
                    <div class="form-group">
                        <label class="my-1 mr-2" for="semester">Select Semester</label>
                        <br>
                        <select class="custom-select my-1 mr-sm-2" id="semester">
                            <option selected="" disabled="">Choose...</option>
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                        </select>
                    </div>
                </div>
                <!-- subject select -->
                <div id="subject_select">
                    <div class="form-group">
                        <label class="my-1 mr-2" for="subject">Select Subject</label>
                        <br>
                        <select class="custom-select my-1 mr-sm-2" id="subject">
                            <option selected="" disabled="">Choose...</option>
                            <option value="1">ABC</option>
                            <option value="2">DEF</option>
                            <option value="3">GHI</option>
                            <option value="4">JKL</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once 'include\footer.php';
?>
