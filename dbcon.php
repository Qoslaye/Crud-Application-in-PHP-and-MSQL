<?php
define ("HOSTNAME" , "Localhost");
define ("USERNAME" , "root");
define ("PASSWORD" , "");
define ("DATABASE" , "crud_operation");

$connection = mysqli_connect(HOSTNAME , USERNAME , PASSWORD , DATABASE );

if (!$connection) {
    die("Database connection failed: ". mysql_error());
}
else{
    echo "Connected successfully";
}
?>