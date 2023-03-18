<?php
if($_GET['f']=="image")
	$cmnd = "cancer/image/test.py";
else
if($_GET['f']=="text")
	$cmnd = "cancer/text/CancerProject.py";
$output = shell_exec("/usr/bin/python --version");
echo $output;
if(shell_exec("python $cmnd"))
	echo "Success";
else
	echo "Failed";
?>