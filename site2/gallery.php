<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Gallery</title>
<!-- Add jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
$(document).ready(function () {
    //Initialize PrettyPhoto here
    $("a[rel^='prettyPhoto']").prettyPhoto({ animation_speed: 'normal', theme: 'facebook', slideshow: 3000, autoplay_slideshow: false, social_tools: false 	});

});
</script>
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
<p>Gallery Page</p>
<div id="works"> 

  <?php
$result = mysql_query("select content from contents where id='4'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
</div>
</div>
<?php include("_includes/footer.php");?>
</div> <!--end wrapper div-->
</body>
</html>