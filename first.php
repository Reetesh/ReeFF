<?php
	require($_SERVER["DOCUMENT_ROOT"]."/config/db_config.php");
	$connection = @mysql_connect($db_host, $db_user, $db_password) or die("The connection <br /> had a problem");
	mysql_select_db($db_name, $connection);

	$query = "SELECT * FROM counter";
	$result = mysql_query($query, $connection) or die(mysql_error());
	$views = mysql_result($result, 0, "views");

	$views++;

	$query = "UPDATE counter SET views = $views";
	mysql_query($query, $connection) or die(mysql_error());
	
        echo "$views";
?>