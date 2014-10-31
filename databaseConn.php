<?php

	//connect database
	$hostname='localhost';
	$username='root';
	$password='888888';
	$conn = mysql_connect($hostname,$username,$password);

    if($conn) echo 'connect database success.';
    mysql_select_db('test',$conn) or die();

?>