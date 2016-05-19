<?php
$email = $_POST['email'];
$password=$_POST['password'];
if (($email=="") || (password=="")) {
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
   
	//create and issue the query
	$query = "SELECT First_Name, Last_Name, Tel_No, email, password from customer WHERE (email = '$email') AND (password = '$password')";
	$result = mysql_query($query) or die( "Invalid Customer ID or password");

	//get the number of rows in the result set; should be 1 if a match
	if (mysql_num_rows($result) == 1) {
   		//if authorized, get the values of firstname lastname, phone and email
    	$First_Name=mysql_result($result,0,"First_Name");
    	$Last_Name=mysql_result($result,0,"Last_Name");
    	
		echo"<h2> Welcome back $First_Name $Last_Name</h2>";
		echo"<a href=products.php> Click Here to goto product page </a>"; 
		mysql_close();
		}
		else
		{
			 echo "Error, Please go back and fill the form";
		}
}
?>
