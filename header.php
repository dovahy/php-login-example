<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login Project</title>
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="stylesheet" href="">
    </head>
    
    <body>

        <nav>
            <div class="wrapper">
                <ul>
                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li><a href='profile.php'>Profile Page</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                        }
                        else {
                            echo "<li><a href='login.php'>Log in</a></li>";
                            echo "<li><a href='register.php'>Register</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>

    <div class="wrapper">