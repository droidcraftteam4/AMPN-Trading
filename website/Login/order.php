<?php
session_start();
$conn = mysql_connect("localhost","user","password");
mysql_select_db("vbs", $conn);
print "<h3>Shopping Cart</h3>\n";
$isbn=$_POST['ordered'];
print "<table align='center' cellpadding=2 cellspacing=2 border=1>
       <th>ISBN</th><th>Name</th><th>Author</th>
        <th>Publisher</th><th>Year</th><th>Price</th>\n";
$price=0;
foreach($isbn as $key => $value) {
$seetable = "Select ISBN, Name, Author, Publisher, Year, Price from book where (ISBN = '$value')";
$result= mysql_query($seetable, $conn);
$row= mysql_fetch_assoc($result);
print "<tr><td>$row[ISBN]</td><td>$row[Name]</td>
              <td>$row[Author]</td><td>$row[Publisher]</td>
              <td>$row[Year]</td><td>$row[Price]</td></tr>";
$total_price = $total_price+$row[Price];

}
print "</table>";
$_SESSION['cart']= $isbn;
$_SESSION['total'] = $total_price;

Print "<p>Click Browser back button to go to product page </p>";
print "<form action='checkout.php' method='POST'>";
print "Enter Your Customer ID and Click Checkout &nbsp;&nbsp;<input name=customer_no type=text id=customer_no size=10 maxlength=10>\n";                 
print "<input type='submit' name='Request' value='Checkout'>\n";
print "</form>\n";
?>