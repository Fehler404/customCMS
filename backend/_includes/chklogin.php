<?php
	$connection= mysql_connect("localhost", "root", "root");
	if (!$connection)
	{
		echo (mysql_error($connection));
		exit();
	} //end test sever connection
	
	$result = mysql_select_db("sitecontent");
	if(!$result)
	{
		echo (mysql_error($connection));
		exit();
	}//end test db connection	
	
	$query="SELECT * FROM members";
	$result=mysql_query($query);
	
	
	if (!$result){
		echo("error with query");
	}//end if error with query
	else
	{
	
	 $userError=false;
	 $passError=false;
	 $loginFailed=false;
	 $enteredPass;
	 $enteredUser;
	
	if(isset($_POST["postback"])){
		
		if(isset($_POST["user"])){
			$enteredUser=$_POST["user"];
			$userError=false;
		}
		else{
			$userError=true;	
		}
		
		if(isset($_POST["pass"])){
			$enteredPass=$_POST["pass"];
			$passError=false;
		}
		else{
			$passError=true;	
		}
		
		
		if( (isset($_POST['postback'])) && (isset($_POST['pass'])) && (isset($_POST['user'])) && $userError==false && $passError==false){
			while($row=mysql_fetch_assoc($result)){	
				if($row["username"]==$enteredUser && $row["password"]==$enteredPass){
					 $loginFailed=false;	
					 session_start();
					 $_SESSION["username"]=$enteredUser;
					 header("Location:backend.php");
				 }//end if
				 else{
					
					$loginFailed=true;
				}//end else
			}//end while
		}//end if
		else{
			$loginFailed=true;
			echo('Login Fail: Incomplete Form');
		}//end else
	}//end post indicator
}//end else successfully connected and queried
?>



















