<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Backend</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

 <?php include("_includes/head.php");?>
</head>

<body>
<header>
<h1>Edit Your Page Details</h1>
</header>

 <script type="text/javascript">

$(function(){
            $('#page').change(function() {

            var inpval=$('#page').val();

            $.ajax({
                type: 'POST',
                data: ({page : inpval}),
                url: 'getdata.php',
                success: function(data) {
                     $('#content').html(data);

          }
        });
    });
});


 </script>


<form id="form" method="post" action="update.php">
<p>Page: <select name="page" id="page">
    <option value="" disabled="disabled" selected="selected">Please Select Page</option>
    <option value="1">Home</option>
   <!-- <option value="8">Home Gallery</option>-->
    <option value="2">About</option>
    <option value="3">Services</option>
    <option value="4">Gallery</option>
    <option value="5">Gift</option>
    <option value="6">Contact</option>
    <option value="7">Schedule</option>
    </select></p>
    <br />
    <input type="hidden" value="read" />
    <textarea name="content" id="content"><?php echo $row["content"];?></textarea>
    <input type="submit" name="submit" value="Publish" /> 
</form>


</body>
</html>