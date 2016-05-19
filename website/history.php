<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>History</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="New folder/css/bootstrap.css">

        <link rel="stylesheet" href="css/style.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include('header.html');
?>

<hr>
<h2 class="text-center">History</h2>
<hr>
<div class="container">

  <div class="row text-center">
 
<?php


$conn = mysql_connect("localhost","root","");
mysql_select_db("website", $conn);
$seetable = "Select qid,name,email,phone,products,enquiry from quotes where email = '".$_SESSION['login']."'";

print "<table class='table-fill' align='center' cellpadding=5 cellspacing=5 border=1 height=90%  sortable>
       <thead><th>Quote ID</th><th>Name</th><th>E-Mail</th>
        <th>Phone</th><th>Products</th><th>Enquiry</th></thead>\n";

$result1 = mysql_query($seetable, $conn);
while ($row = mysql_fetch_assoc($result1))   {
   print "<tbody class='table-hover'><tr><td>$row[qid]</td><td>$row[name]</td>
              <td>$row[email]</td><td>$row[phone]</td>
              <td>$row[products]</td><td>$row[enquiry]</td>
            </tr></tbody>\n";            
                 }
print "</table><br>";
mysql_close();
include("footer.html");
?>

</div>

</div>


<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>

</body>
</html>