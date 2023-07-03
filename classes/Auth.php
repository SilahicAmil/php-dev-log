<?php

class Auth
{

    public $username;
    public $email;
    public $password;
    // check authentication if logged in or not

    // singup method
    public static function createUserAccount($conn, string $username, string $email, string $password)
    {
        // Insert into users db
        echo $username . "\n";
        echo $email . "\n";
        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
        echo $hashed_pass . "\n";
        if (password_verify($password, $hashed_pass)) {
            echo "true";
        } else {
            echo "false";
        }
        // also take the $password and hash it w/ default

    }

    public static function authenticateLogin($conn, $username, $password)
    {
        // authenticate user
        // password verify
        //return isset $_session["is_currently_logged_in"]

    }
}
