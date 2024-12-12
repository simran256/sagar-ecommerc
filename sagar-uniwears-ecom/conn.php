<?php
// Enable detailed error reporting to diagnose the issue
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session

$ses_id = session_id();

$host = 'localhost';
$username = 'web2te_sagar_uniwears_ecom';
$password = 'Wp@mnew,BdDy';
$dbName = 'web2te_sagar_uniwears_ecom';

// Create connection
$conn = new mysqli($host, $username, $password, $dbName);

// Check connection
if ($conn->connect_errno) {
    die("Failed to connect to MySQL: " . $conn->connect_error);
}

$site_root = 'https://web2tech.org/sagar-uniwears-ecom/admin';
$site = 'https://web2tech.org/sagar-uniwears-ecom/';

// Do not close the connection yet if you still need it
// Remove or comment out the following line
// $conn->close();
$theme1=mysqli_query($conn,"select * from users where id='1'");
$theme=mysqli_fetch_assoc($theme1);
$logo1=mysqli_query($conn,"select * from logo where id='1'");
$logo=mysqli_fetch_assoc($logo1);
?>
