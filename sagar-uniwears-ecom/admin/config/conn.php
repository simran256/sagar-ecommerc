<?php
error_reporting(0);
session_start();
$ses_id = session_id();

$host = 'localhost';
$username = 'web2te_sagar_uniwears_ecom';
$password = 'Wp@mnew,BdDy';
$dbName = 'web2te_sagar_uniwears_ecom';



$conn = new mysqli($host,$username,$password,$dbName);
if($conn->connect_errno)
{
	echo $conn->connect_error;
}



//$site_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
$site_root = 'https://web2tech.org/sagar-uniwears-ecom/admin';
$site = 'https://web2tech.org/sagar-uniwears-ecom/';

?>