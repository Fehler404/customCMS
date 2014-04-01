<?php include("_includes/chklogin.php");?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$('input, textarea').placeholder();
		});
		</script>

</head>

<body>

<header>
<h1>Site Name Login</h1>
</header>

<section class="main">
<?php if($loginFailed){echo("<p>We don't have that user name and password. Please check your user name and password and try again. <br/><br/>"); } ?>
<form class="form-login clearfix" name="form1" id="form1" action="login.php" method="post">
<input type="hidden" name="postback" value="postedBack">
<p>
<input type="text" id="user" name="user" value="<?php echo($enteredUser); ?>" placeholder="Username">
<?php if($userError){echo("<strong>Oops! Please enter your user name</strong>"); } ?>
<input type="password" name="pass" id="pass" value="<?php echo($enteredPass); ?>" placeholder="Password">
<?php if($passError){echo("<strong>Oops! Please enter your password</strong>"); } ?> 
</p>

<button type="submit" name="submit">
<i class="icon-arrow-right"></i>
<span>Sign in</span>
</button>     

</form>


</section>



</body>
</html>