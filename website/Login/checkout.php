<?php
session_start();
$conn = mysql_connect("localhost","root","");
mysql_select_db("vbs", $conn);
$isbn=$_SESSION['cart'];
$total_price = $_SESSION['total'];
$customer_no = $_POST['customer_no'];
$date = date("m/d/y");
print "<h2>Order Details</h2>\n";
print "<h4>Customer ID: $customer_no</h4>\n";

print "<table align='center' cellpadding=2 cellspacing=2 border=1>
       <th>ISBN</th><th>Order ID</th>\n";
foreach($isbn as $key => $value) {
	$transaction_no = $customer_no.rand();
	$seetable = "INSERT INTO transaction VALUES('$transaction_no', '$customer_no', '$date', '$value')";
	$result= mysql_query($seetable, $conn) or die ("Error");
	
	print "<tr><td>$value</td><td>$transaction_no</td></tr>";
}
print "</table>";
print "<h4>Total Due: $ $total_price</h4>\n";
print "<br> <hr>";
?>
