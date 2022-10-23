<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["passwordrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputRegister($name, $username, $email, $password, $passwordrepeat) !==false) {
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($username) !==false) {
        header("location: ../register.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !==false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }
    if (passwordMatch($password, $passwordrepeat) !==false) {
        header("location: ../register.php?error=passwordsnotmatching");
        exit();
    }
    if (usernameExists($conn, $username, $email) !==false) {
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);

}
else {
    header("location: ../register.php");
    exit();
}