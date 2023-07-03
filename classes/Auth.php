<?php

class Auth
{

    public $username;
    public $email;
    public $password;
    // check authentication if logged in or not

    // singup method
    public static function createUserAccount($conn, $username, $password, $email)
    {
        // Connect to DB
        // Insert into users db
        // also take the $password and hash it w/ default

    }

    public static function authenticateLogin($conn, $username, $password)
    {
        // authenticate user
        // password verify
        //return isset $_session["is_currently_logged_in"]

    }
}
