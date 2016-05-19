<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Polycell Bubble Wrap</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="New folder/css/bootstrap.css">

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



<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("website", $conn);
$seetable = "Select product_code, name,description,image from products where name = 'Polycell Bubble Wrap'";

$result1 = mysql_query($seetable, $conn);
while ($row = mysql_fetch_assoc($result1))   {
   
               

?>


<h2 class="text-center"><?php echo$row['name'] ?></h2>
<hr>  

<div class="container">
  <div class="row text-center">
   
  </div>
  <div class="row text-center hidden-xs"></div>
  <nav class="text-center">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination">
      <img src= <?php echo$row['image'] ?>  alt="" width="339" height="355" align="left"/>
      <li></li>
    </ul>
    <p><?php echo$row['description'] ?>    </p>
    <p>&nbsp;</p>
    
    <p>&nbsp;</p>
    <p>
  </nav>
  <p>  
 </div>
<?php


}


mysql_close();
?>
<?php
include('footer.html');
?>
<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>
</body>
</html>