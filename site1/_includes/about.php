<h3 class="page_title"> About Us</h3>
      <div class="page_content">
        <?php
$result = mysql_query("select content from contents where id='2'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
            

        
        <div class="clear"> </div>
      </div>