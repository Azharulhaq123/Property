<?php

	$db_host = "localhost";
 	$db_user = "root";
	$db_pass = "100372";
	$db_name = "property";
	$link =  mysql_connect($db_host,$db_user,$db_pass);
	if(!$link) die ('Could not connect to database: '.mysql_error());
	mysql_select_db ($db_name);


?>