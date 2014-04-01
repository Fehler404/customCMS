<?php

$connection = mysql_connect ("localhost", "tuniqued_app", "WEB4750");
	if (!$connection) {
		die("Database connection failed: "
. mysql_error());}
$db_select = mysql_select_db("tuniqued_appointments", $connection);
	if (!$db_select) {
		die("Database selection failed: "  .mysql_error());}


// $connection = mysql_connect ("localhost", "root", "root");
// 	if (!$connection) {
// 		die("Database connection failed: "
// . mysql_error());}
// $db_select = mysql_select_db("appointments", $connection);
// 	if (!$db_select) {
// 		die("Database selection failed: "  .mysql_error());}

$stylist = $_POST['stylist'];
$time = $_POST['time'];	
$day = $_POST['day'];
	
//TRUE (1) or FALSE (0) 

$query1 = "select shift_id from shifts where stylist_id='$stylist' AND time_id='$time' AND day_id='$day'";	

$result = mysql_query("$query1", $connection) or die("Database selection failed: " .mysql_error());
	$row = mysql_fetch_assoc($result);


 if($row==0)
{
echo "<p>Sorry that stylist is not available that day and time selected.</p>";
}
else
{

echo "<p>Your appointment will be scheduled. We will email to confirm.</p>";
}
	
	
mysql_free_result($result);

$query1 = "select shift_id from shifts where stylist_id='$stylist' AND day_id='$day'";
$result = mysql_query("$query1", $connection) or die("Database selection failed: " .mysql_error());
	$row = mysql_fetch_assoc($result);


 if($row==0)
{
echo "<p> Sorry that stylist is not scheduled on this day. </p>";
}
else
{

echo "<p>The stylist is available on this day.</p>";
}

mysql_free_result($result);

$query1 = "select shift_id from shifts where stylist_id='$stylist' AND time_id='$time'";
$result = mysql_query("$query1", $connection) or die("Database selection failed: " .mysql_error());
	$row = mysql_fetch_assoc($result);

	
 if($row==0)
{
echo "<p> The stylist is not available at this time. </p>";
}
else
{

echo "<p>The stylist is available at this time.</p>";
}


?>