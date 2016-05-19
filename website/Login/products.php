
<?php
print "<h3>Book Catalogue</h3>\n";
print "<form action='order.php' method='POST'>";
$conn = mysql_connect("localhost","root","");
mysql_select_db("vbs", $conn);
$seetable = "Select ISBN, Name, Author, Publisher, Year, Price from book";

print "<table align='center' cellpadding=2 cellspacing=2 border=1>
       <th>ISBN</th><th>Name</th><th>Author</th>
        <th>Publisher</th><th>Year</th><th>Price</th><th>Select</th>\n";

$result1 = mysql_query($seetable, $conn);
while ($row = mysql_fetch_assoc($result1))   {
   print "<tr><td>$row[ISBN]</td><td>$row[Name]</td>
              <td>$row[Author]</td><td>$row[Publisher]</td>
              <td>$row[Year]</td><td>$row[Price]</td>
            <td><input type='checkbox' name='ordered[]' value='$row[ISBN]'></td></tr>\n";            
                 }
print "</table>";
print "<input type='submit' name='Request' value='Add to Cart'>\n";
print "</form>\n";
mysql_close();
?>
