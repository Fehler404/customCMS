<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>About</title>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<?php
$connection = mysql_connect ("localhost", "tuniqued_sites", "WEB4750");
	if (!$connection) {
		die("Database connection failed: "
. mysql_error());}
$db_select = mysql_select_db("tuniqued_templates", $connection);
	if (!$db_select) {
		die("Database selection failed: "  .mysql_error());}

?>

<?php
//$connection = mysql_connect ("localhost", "root", "root");
//	if (!$connection) {
//		die("Database connection failed: "
//. mysql_error());}
//$db_select = mysql_select_db("sitecontent", $connection);
//	if (!$db_select) {
//		die("Database selection failed: "  .mysql_error());}
//
?>


</head>

<body>
<div id="wrapper">
<?php include("_includes/header.php");?>
<div class="mainContent">
<h2>About Us</h2>
<br/>
<p>  <?php
$result = mysql_query("select content from contents where id='2'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
            
</p>

</div>
<?php include("_includes/footer.php");?>
</div> <!--end wrapper div-->
<?php mysql_close($connection);?>

</body>
</html>