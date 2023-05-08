<?php
require "classes/Database.php";

$db = new Database();
// return db connection 
return $db->getDatabaseConnection();
// use $connection = require "includes/db.php"

// for all connections needed across the app
// since not every page will need the db connection