<?php
    include_once 'include\header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="include\signup.inc.php" method="post">
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
    include_once 'include\footer.php';
?>