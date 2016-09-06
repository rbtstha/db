<?php

if(isset($_REQUEST['sub']))
{
	$source = $_REQUEST['source'];
	$dest = $_REQUEST['destination'];

	$conn = new mysqli("localhost","root","just","student");
	$query = "select `weight` from `route` where `source`='".$source."' and `destination`='".$dest."'";

	$db = $conn->query($query);
	$db = $db->fetch_assoc();
	echo "the weight of this route is = ". $db['weight'];
}
?>


