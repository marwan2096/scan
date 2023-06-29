<?php

use MyApp\classes\Product;

require_once('../vendor/autoload.php');
include_once('db_credentials.php');
include_once('helper_functions.php');

// Connect to database
// private $servername="sql312.infinityfree.com";
// private $username="if0_34495915";
// private $password="wlxStSyVDY";
// private $db="if0_34495915_cars";



$server_name="sql312.infinityfree.com";
$username="if0_34495915";
$password="wlxStSyVDY";
$dbname="if0_34495915_cars";

// create connection
// $conn=mysqli_connect($server_name, $username, $password, $dbname);




$database = mysqli_connect($server_name, $username, $password, $dbname, $DB_PORT);
// Set the database for the classes
Product::set_database($database);


