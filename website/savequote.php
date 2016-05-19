<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $p=implode(',',$_POST['products']);
    $enquiry=$_POST['enquiry'];
 
	
    if (($name == "") or ($phone == "") or ($email == "")or ($enquiry == ""))
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
    
    $query = "INSERT INTO quotes VALUES ('','$name','$email','$phone','$p','$enquiry')";
    mysql_query($query) or die( "Unable to insert the record");
header("Location: javascript:window.history.go(-1);");
mysql_close();
	
    
    }
   
?>
