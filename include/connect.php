<?php

if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


/* Database config */

$dbhost		= 'localhost';
$dbuser		= 'root';
$dbpass		= '';
$dbname	= 'featured'; 

/* End config */



$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('Unable to establish a DB connection');

mysqli_select_db($conn,$dbname);
mysqli_query($conn,"SET names UTF8");

?>