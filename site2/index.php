<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Site 2</title>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/smart-gallery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
        $('.smart-gallery').gallery({ stickthumbnails: true, random: true, imagedisplaytime: 5000});
        });
</script>


<script language="javascript">
function validate()
{
zip = document.form1.txtZip.value;
	 if (zip.length !=5 && zip !=10)
	 {
		 alert("Use 5 digit or zip  + 4 format for zip code");
		 document.form1.txtZip.focus();
		 return false;
	 }
	return true;
}
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

?>


</head>

<body>
<div id="wrapper">
<?php include("_includes/header.php");?>

<div class="mContent">
<div class="smart-gallery">
<a href="images/galimg/001.jpg"><img src="images/galimg/001.jpg"></a> 
<a href="images/galimg/002.jpg"><img src="images/galimg/002.jpg"></a> 
<a href="images/galimg/003.jpg"><img src="images/galimg/003.jpg"></a> 
<a href="images/galimg/004.jpg"><img src="images/galimg/004.jpg"></a> 
<a href="images/galimg/005.jpg"><img src="images/galimg/005.jpg"></a>
</div> <!--end gal div-->
<div class="mainsection">
<h3>Welcome</h3>
<br />
<p>  <?php
$result = mysql_query("select content from contents where id='1'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
            
</p>

<div class="mfind"></div>
<h3>Find a location</h3>
<br/ >
<br />
<form id="searchbox" method="post" action=""  onSubmit="return validate()">
    <input id="search" type="text" name="txtZip" placeholder="Enter Zip Code" />
    <input id="submit" type="submit" value="Search">
</form>


</div>


</div>
<div id="bottom">
<div class="sched">
<a href="schedule.php">Schedule an appointment</a>

</div>
</div><!--end bottom div-->
<?php include("_includes/footer.php");?>
</div> <!--end wrapper div-->
<script type="text/javascript">
$(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>
<?php mysql_close($connection);?>
</body>
</html>