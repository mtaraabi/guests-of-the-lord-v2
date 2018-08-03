<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name'] = "gl_hajj";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

/*
$db_host = "localhost";
$db_user = "alqasr_rms";
$db_pass = "VT$7.3-eHJ0CmR";
$db_name = "alqasr_moh";
*/
// $connection = mysqli_connect($DB_HOST, $db_user, $db_pass, $db_name);

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);

$query = "SET NAMES utf8";
mysqli_query($connection,$query);
?>
