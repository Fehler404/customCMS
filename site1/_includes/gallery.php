<h3 class="page_title"> Gallery</h3>
      <div class="page_content">
        
        <div class="clear"> </div>
        <div id="works"> 
          <!-- works --> 
          <!--<a rel="prettyPhoto[gallery]" href="images/photos/01.jpg"> <img class="work js" src="images/photos/01.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/03.jpg"> <img class="work css" src="images/photos/03.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/04.jpg"> <img class="work html_php" src="images/photos/04.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/05.jpg"> <img class="work html_php" src="images/photos/05.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/06.jpg"> <img class="work css" src="images/photos/06.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/07.jpg"> <img class="work js" src="images/photos/07.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/08.jpg"> <img class="work html_php" src="./images/photos/08.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/09.jpg"> <img class="work js" src="images/photos/09.jpg" alt="" /> </a><a rel="prettyPhoto[gallery]" href="images/photos/10.jpg"> <img class="work html_php" src="images/photos/10.jpg" alt="" /> </a> -->
           <?php
$result = mysql_query("select content from contents where id='4'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
            

          
          
          
          </div>
        <div class="clear"> </div>
      </div>