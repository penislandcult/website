<?php
$servername = "mysql.hostinger.lv";
$username = "u874794436_pic";
$password = "h4dazadi";
$dbname = "u874794436_pic";


$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	die("Error:&nbsp;" . $conn->connect_error);
}
?>
