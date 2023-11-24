<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Log In</h2>
        <form action="include\login.inc.php" method="post">
            <!-- <input type="text" name="userName" placeholder="Username/Email"> -->
            <div class="form-floating mb-3">
                <input type="text" name="userName" class="form-control" id="floatingInput" placeholder="name@example.com"/>
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password"/>
                <label for="floatingInput">Password</label>
            </div>
            <button type="submit" name="submit">Log In</button>
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
                else if ($_GET["error"] == "incorrectlogin") {
                    echo "<p>Details don't match!</p>";
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