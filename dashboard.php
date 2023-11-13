<?php
    include_once 'include\header.php';
?>

    <section class="dashboard">
        <div class="welcome">
            <?php
                if (isset($_SESSION["email"])){
                    echo "<p>Welcome ". $_SESSION["email"] . "</p>";
                }
            ?>
        </div>
        <ul>
            <li><a href="question_upload.php">Question Upload</a></li>
            <li><a href="qp_download.php">Question Paper Download</a></li>
        </ul>
            

        </form>
    </section>




<?php
    include_once 'include\footer.php';
?>