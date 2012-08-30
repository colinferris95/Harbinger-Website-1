<?php
	
	$host="127.0.0.1";
	$username="root";
	$password="laFr0scia";
	$db_name="harbinger";
	$tbl_name="users";
	
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");
	
	$myusername = $_REQUEST["username"];
	$mypassword = $_REQUEST["password"];
	
	$myusername= stripslashes($myusername);
	$mypassword= stripslashes($mypassword);
	
	$myusername= mysql_real_escape_string($myusername);
	$mypassword= mysql_real_escape_string($mypassword);
	
	$sql="SELECT * FROM $tbl_name WHERE username='$myusername'";
	$result=mysql_query($sql);
	
	$count=mysql_num_rows($result);
	
	if($count==1){
		session_register("myusername");
		session_register("mypassword");
		header("location:index.php");
	} else {
		echo "Wrong Username or Password";
	}
?>