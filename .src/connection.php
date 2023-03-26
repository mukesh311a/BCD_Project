<?php 

$conn = mysqli_connect("mysql_db", "root", "root", "weislabc_bcd");
#$conn = mysqli_connect('localhost','root','root','weislabc_bcd');
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}
?>