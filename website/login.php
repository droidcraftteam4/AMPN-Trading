
<?php

$email = $_POST['email'];
$password=$_POST['password'];
if (($email=="") || ($password=="")) {
    echo "Error, Please go back and fill the form";
}
else
	{   
	//connect to server and select database
	$hostname= "localhost";
	$database = "website";
	$user = "root";
	$pass = "";
	$mysql_link=mysql_connect($hostname,$user,$pass) or die( "Unable to connect to the server");
	mysql_select_db($database) or die( "Unable to select the database");
   	$password = md5($password);
	//create and issue the query
	$query = "SELECT fname, lname, email, password from customer WHERE (email = '$email') AND (password = '$password')";
	$result = mysql_query($query) or die( "Invalid Customer ID or password");

	//get the number of rows in the result set; should be 1 if a match
	if (mysql_num_rows($result) == 1) {
   		//if authorized, get the values of firstname lastname, phone and email
    	session_start();
	$_SESSION['login'] = $email;
	$fname=mysql_result($result,0,"fname");
    	$lname=mysql_result($result,0,"lname");
    	
	//	echo"<h2> Welcome $fname $lname</h2>";
	//	echo"<a href=quote.php> Click Here to request a quote </a>"; 
	
header ("Location: membersarea.php");
		mysql_close();
		}
		else
		{
			 echo "<h2>Error, Please go back and fill the form</h2>";
session_start();
$_SESSION['login'] = '';
		}
}
