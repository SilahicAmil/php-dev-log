<?php

/**
 * Database
 * 
 * A connection to the database
 */
class Database
{
    /**
     * Establishes a Database Connection
     * 
     * @return PDO object Connection to the Database
     */
    public function getDatabaseConnection(): object
    {
        $db_host = "localhost";
        $db_name = "dev_log";
        $db_user = "dev_www";
        $db_pass = "BPwwFc8TTibSSAO(";

        $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";

        try {
            $db = new PDO($dsn, $db_user, $db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        } catch (PDOException $error) {
            echo $error->getMessage();

            exit;
        }
    }
}
