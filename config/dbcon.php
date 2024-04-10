<?php 
//establish connection to the database titled pos_system
define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASENAME',"pos_system");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

//check if connection failed
if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

?>