<?php

$connection = mysql_connect ("localhost", "root", "root");
	if (!$connection) {
		die("Database connection failed: "
. mysql_error());}
$db_select = mysql_select_db("sitecontent", $connection);
	if (!$db_select) {
		die("Database selection failed: "  .mysql_error());}
		
$dropdown_val = $_POST['page'];		
$result = mysql_query("select content from contents where id='$dropdown_val'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { 
			echo stripslashes($row["content"]);
	}
	
	?>


