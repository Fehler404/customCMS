<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Schedule an Appointment</title>
<link href="css/style.css" type="text/css" rel="stylesheet"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>  
 <script type="text/javascript">

$(function(){
            $('#form select').change(function(e) {
          
          /*if(e.target.id == 'name' || e.target.id == 'email'){
            e.preventDefault();
          }
          console.log(e.target.id);*/

      var inpval=$('#stylist').val();
      var inpval1=$('#time').val();
      var inpval2=$('#day').val();

        // if (inpval2 == '0' )
        // {
        //   return false;
        // } 
            $.ajax({
                type: 'POST',
                data: ({stylist : inpval,
                        time : inpval1,
                        day : inpval2
                      }),
                url: 'getapp.php',
                success: function(data) {
                     $('#result').html(data);

          }
        });
    });
});


 </script>
 

<style>
input:required:invalid, input:focus:invalid {
  background-image: url('images/invalid.png');
  background-position: right top;
  background-repeat: no-repeat;
}
input:required:valid {
  background-image: url('images/valid.png');
  background-position: right top;
  background-repeat: no-repeat;
}
</style>

</head>

<body>
<div id="wrapper">
<?php include("_includes/header.php");?>
<div class="mainContent">
<h2>Schedule an Appointment </h2>
<br/>
<form id="form" method="post">
<p>Your Name: <input type="text" name="name" id="name" autofocus required title="Name is Required!"/></p>
<p>Email Address: <input type="email" name="email" required placeholder="Enter email address"></p>
<p>Select Your Stylist: <select name="stylist" id="stylist">
    <option value="0" disabled="disabled" selected="selected">Please Select Stylist</option>
    <option value="1">Jennie</option>
    <option value="2">Terry</option>
    <option value="3">Brent</option>
    <option value="4">Jess</option>
    <option value="5">Kristie</option>
    </select></p>

<p>Select Your Time: <select name="time" id="time">
    <option value="0" disabled="disabled" selected="selected">Please Select Time</option>
    <option value="1">Morning</option>
    <option value="2">Afternoon</option>
    <option value="3">Evening</option>
  </select></p>
    
<p>Select a Day: <select name="day" id="day">
    <option value="0" disabled="disabled" selected="selected">Please Select Day</option>
    <option value="1">Monday</option>
    <option value="2">Tuesday</option>
    <option value="3">Wednesday</option>
    <option value="4">Thursday</option>
    <option value="5">Friday</option>
    <option value="6">Saturday</option>
    <option value="7">Sunday</option>
    </select></p>

</form>


<br/>
<div id="result">


</div>
<script type="text/javascript">

  // ref: http://diveintohtml5.org/detect.html
  function supports_input_placeholder()
  {
    var i = document.createElement('input');
    return 'placeholder' in i;
  }

  if(!supports_input_placeholder()) {
    var fields = document.getElementsByTagName('INPUT');
    for(var i=0; i < fields.length; i++) {
      if(fields[i].hasAttribute('placeholder')) {
        fields[i].defaultValue = fields[i].getAttribute('placeholder');
        fields[i].onfocus = function() { if(this.value == this.defaultValue) this.value = ''; }
        fields[i].onblur = function() { if(this.value == '') this.value = this.defaultValue; }
      }
    }
  }

</script>

  
</div>
<?php include("_includes/footer.php");?>
</div> <!--end wrapper div-->
</body>
</html>