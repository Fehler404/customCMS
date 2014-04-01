<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Site 1</title>

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="styles/style.css" media="screen" />
<link rel="stylesheet" href="styles/media-queries.css" />
<link rel="stylesheet" href="./flex-slider/flexslider.css" type="text/css" media="screen" />
<link href="styles/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="./flex-slider/jquery.flexslider-min.js"></script>
<script src="scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./scripts/setup.js"></script>
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

?>


	

</head>
<body>
<div id="wrap"> 
  <div id="sidebar"> 
    <?php include("_includes/header.php");?>
  </div>
  <div id="container"> 
    <!-- page container -->
    <div class="page" id="home"> 
      <!-- page home -->
      <div class="page_content">
        <?php include("_includes/slider.php");?>
        <div class="clear"> </div>
        <div class="clear"> </div>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="about"> 
      <!-- page about -->
      <?php include("_includes/about.php");?>
    </div>
    <div class="page" id="services"> 
      <!-- page services -->
      <?php include("_includes/services.php");?>
    </div>
    <div class="page" id="gift"> 
      <!-- page gift -->
      <?php include("_includes/gift.php");?>
    </div>
    <div class="page" id="gallery"> 
      <!-- page gallery -->
      <?php include("_includes/gallery.php");?>
    </div>
    
    <div class="page" id="schedule"> 
      <!-- page schedule -->
      <?php include("_includes/schedule.php");?>
    </div>
    <div class="page" id="contact"> 
      <!-- page contact -->
      <?php include("_includes/contact.php");?>
    </div>
   
   <?php include("_includes/footer.php");?>
  </div>
</div>
<?php mysql_close($connection);?>

<a class="gotop" href="#top">Top</a>
</body>
</html>
