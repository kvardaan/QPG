<?php
    include_once 'include\header.php';
?>

    <section class="signup-form">
        <h2>Log In</h2>
        <form action="include\login.inc.php" method="post">
            <input type="text" name="userName" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
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
    include_once 'include\footer.php';
?>