<?php
    $First_Name=$_POST['First_Name'];
    $Last_name=$_POST['last_Name'];
    $Tel_No=$_POST['Tel_No'];
    $Customer_No=$_POST['Customer_No'];
    $Password=$_POST['Password'];
    $RePassword=$_POST['RePassword'];
	
    if (($First_Name == "") or ($Last_Lame == "") or ($Customer_No == "")or ($Password == ""))
    {
    echo"<p>Required Field(s) missing...!!!! Go back and Try again...!!!!.</p>";
    }
    elseif ($Password != $RePassword)
    {
    echo"<p>password Miss Match...!!!! Go back and Try again...!!!!.</p>";
    }
    else
    {
    //Connect to the server and add a new record 
	$hostname= "localhost";
	$database = "vbs";
	$user = "root";
	$pass = "";
	$mysql_link=mysql_connect($hostname,$user,$pass) or die( "Unable to connect to the server");
	mysql_select_db($database) or die( "Unable to select the database");
    $query = "INSERT INTO customer VALUES ('$Customer_No','$First_Name','$Last_Name','$tel_no','$password')";
    mysql_query($query) or die( "Unable to insert the record");
    mysql_close();
    echo "<p> <b>Record Added Successfully......!!!! </p>";
    echo"<p> <a href=login.htm>Click Here to Login to the Member Page </a> </b></p>";
    $message = "Thank you for registering with us\nYour Details are: \nName: $_POST[first_name]\nCustomer No: $_POST[customer_no]\ntel_no: $_POST[tel_no]\nPassword: $_POST[password]\n";

    }
?>
