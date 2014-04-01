<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Site 3</title>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<!-- Add jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script type="text/javascript" src="js/smart-gallery.min.js"></script>
<script type="text/javascript" src="js/jquery.content-panel-switcher.js"></script>
<script type="text/javascript">
$(function(){
 
    function contentSwitcher(settings){
        var settings = {
           contentClass : '.content',
           navigationId : 'nav'
        };
 
        //Hide all of the content except the first one on the nav
        $(settings.contentClass).not(':first').hide();
        $(settings.navigationId).find('li:first').addClass('active');
 
        //onClick set the active state, 
        //hide the content panels and show the correct one
        $(settings.navigationId).find('a').click(function(e){
            var contentToShow = $(this).attr('href');
            contentToShow = $(contentToShow);
 
            //dissable normal link behaviour
            e.preventDefault();
 
            //set the proper active class for active state css
            $(settings.navigationId).find('li').removeClass('active');
            $(this).parent('li').addClass('active');
 
            //hide the old content and show the new
            $(settings.contentClass).hide();
            contentToShow.show();
        });
    }
    contentSwitcher();
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

?>



</head>

<body>
<div id="wrapper">
<div class="social">
<a href="#"><img src="images/facebook.png" alt="facebook"  /></a><a href="#"><img src="images/twitter.png" alt="twitter" /></a><a href="#"><img src="images/pinterest.png" alt="pinterest"  /></a>
</div>
<div id="logo"><img src="images/logo.png" alt="logo"  /></div>
<div id="header">
<nav>

<ul id="pageitem-menu">
	<li><a href="#pageitem-1">Home</a></li>
	<li><a href="#pageitem-2">About Us</a></li>
	<li><a href="#pageitem-3">Services</a></li>
	<li><a href="#pageitem-4">Gallery</a></li>
	<li><a href="#pageitem-5">Gift Cards</a></li>
    <li><a href="#pageitem-6">Contact Us</a></li>
</ul>

</nav>
</div>
<div id="mainContent">
<div id="pageitem-1" class="content">
<?php include("_includes/home.php");?>
</div>
<div id="pageitem-2" class="content">
<h2>About Us</h2>
<br/>
 <?php
$result = mysql_query("select content from contents where id='2'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
            
</div>
<div id="pageitem-3" class="content">
<h2>Services</h2>
 <br/>
       <?php
$result = mysql_query("select content from contents where id='3'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
            

</div>
<div id="pageitem-4" class="content">
<?php include("_includes/gallery.php");?>
</div>
<div id="pageitem-5" class="content">
<h2>Gift Cards</h2>
<br/>
<?php
$result = mysql_query("select content from contents where id='5'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
            

</div>
<div id="pageitem-6" class="content">
<?php include("_includes/contact.php");?>
</div>

</div>




<footer>
<p>Copyright &copy; 2013 Company Name</p>
</footer>
</div>
<?php mysql_close($connection);?>
</body>
</html>