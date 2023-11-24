<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="include\signup.inc.php" method="post">
            <!-- <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Full Name"/>
                <label for="floatingInput">Enter Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="userName" class="form-control" id="floatingInput" placeholder="Username"/>
                <label for="floatingInput">Enter Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"/>
                <label for="floatingInput">Enter Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password"/>
                <label for="floatingInput">Enter Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="cpwd" class="form-control" id="floatingPassword" placeholder="ConfirmPassword"/>
                <label for="floatingInput">Confirm Password</label>
            </div> -->
            <input type="text" name="name" placeholder="Enter Full Name">
            <input type="text" name="userName" placeholder="Enter Username">
            <input type="text" name="email" placeholder="Enter Email">
            <input type="password" name="pwd" placeholder="Enter Password">
            <input type="password" name="cpwd" placeholder="Confirm Password">                        
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyinput") {
                    echo "<p>Fill in all the fields!</p>";
                }
                else if ($_GET["error"] == "invaliduserName") {
                    echo "<p>Choose proper username!</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose proper email!</p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>The passwords your entered don't match!</p>";
                }
                else if ($_GET["error"] == "emailtaken") {
                    echo "<p>Email already taken!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Try again!</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>Success!</p>";
                }
            }
        ?>
    </section>

<?php
    include_once 'footer.php';
?>