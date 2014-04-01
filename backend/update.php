<?php
$host = "localhost";
$user = "root";
$db_name= "sitecontent";
$pass= "root";



$con = mysql_connect($host, $user, $pass);

if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("sitecontent", $con);
$content=mysql_real_escape_string($_POST['content']);
$dropdown_val = $_POST['page'];		
$sql="UPDATE contents SET content='$content' WHERE id='$dropdown_val'"; 
if (!mysql_query($sql,$con)) {
die('Error: ' . mysql_error()); 
} 
echo "Your page has been updated! Go Back to edit pages here: <a href='backend.php'>HERE</a>"; 
mysql_close($con);
?>

