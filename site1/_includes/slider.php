<div class="gf-slider"> 
          <!-- slider -->
          <ul class="slides">
            <li> <img src="images/galimg/001.jpg" alt="">
              <!--<p class="flex-caption"> lorem ipsum </p>-->
            </li>
            <li> <img src="images/galimg/002.jpg" alt="" />
              
            </li>
            <li> <img src="images/galimg/003.jpg" alt="" />
              
            </li>
            <li> <img src="images/galimg/004.jpg" alt="" />
              
            </li>
            <li> <img src="images/galimg/005.jpg" alt="" />
             
            </li>
          </ul>
        </div>
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