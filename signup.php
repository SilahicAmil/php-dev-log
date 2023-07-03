<?php

$conn = require "includes/db.php";
require "classes/Auth.php";


// have to use these since my ini is messed up
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    Auth::createUserAccount(
        $conn,
        $_POST["username"],
        $_POST["email"],
        $_POST["password"]
    );
}
?>

<?php require "includes/header.php"; ?>

<form method="POST">

    <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="passowrd" id="password" name="password">
    </div>

    <button>Sign Up</button>

</form>

<?php require "includes/footer.php"; ?>