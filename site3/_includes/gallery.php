<p>Gallery content here</p>
<script type="text/javascript">
$(document).ready(function () {
    //Initialize PrettyPhoto here
    $("a[rel^='prettyPhoto']").prettyPhoto({ animation_speed: 'normal', theme: 'facebook', slideshow: 3000, autoplay_slideshow: false, social_tools: false 	});

});
</script>
<div id="works"> 


  <?php
$result = mysql_query("select content from contents where id='4'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
</div>