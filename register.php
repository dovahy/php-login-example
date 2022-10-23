<?php
    include_once 'header.php';
?>

    <section>
        <h2>Registration</h2>
        <form action="includes/register.inc.php" method="post">
            <input type="text" name="name" placeholder="First name">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="passwordrepeat" placeholder="Confirm password">
            <button type="submit" name="submit">Register</button>    
        </form>
        
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "invalidusername") {
                    echo "<p>Invalid username</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Invalid email</p>";
                }
                else if ($_GET["error"] == "passwordsnotmatching") {
                    echo "<p>Passwords don't match!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, try again.</p>";
                }
                else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Username already taken!</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>Registered successfully!</p>";
                }
            }
        ?>
    </section>

<?php
    include_once 'footer.php';
?>