<?php

// use $connection = require "includes/db.php"
// for all connections needed across the app
// since not every page will need the db connection
// return db connection 

require "classes/Database.php";

$db = new Database();

return $db->getDatabaseConnection();