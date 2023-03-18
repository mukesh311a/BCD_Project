<?php 
$conn = mysqli_connect('localhost','weislabc_bcd.sql','bcd@123','weislabc_bcd');
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}
?>
