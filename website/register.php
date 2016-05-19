<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  
	
    if (($fname == "") or ($lname == "") or ($email == "")or ($password == ""))
    {
    echo"<p>Required Field(s) missing! Go back and Try again.</p>";
    }
   
    else
    {
    //Connect to the server and add a new record 
	$hostname= "localhost";
	$database = "website";
	$user = "root";
	$pass = "";
	$mysql_link=mysql_connect($hostname,$user,$pass) or die( "Unable to connect to the server");
	mysql_select_db($database) or die( "Unable to select the database");
    $password = md5($password);
    $query = "INSERT INTO customer VALUES ('$fname','$lname','$email','$password')";
    mysql_query($query) or die( "Unable to insert the record");
    mysql_close();
    echo "<p> <b>Record Added Successfully. </p>";
    echo"<p> <a href=members.php>Click Here to Login to the Member Page </a> </b></p>";


    }
?>
