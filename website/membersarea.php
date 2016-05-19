<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Members Area</title>

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

<hr>
<h2 class="text-center">Members Area</h2>
<hr>
<div class="container">
  <div class="row text-center">

    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <div> <a href="quote.php"><img src="quote.png" alt="Thumbnail Image 1" class="img-responsive"></a>
        
      </div>
    </div>
  <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <div> <a href="history.php"><img src="history.png" alt="Thumbnail Image 1" class="img-responsive"></a>
        
      </div>
    </div>
  <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <div> <a href="logout.php"><img src="logout.jpg" alt="Thumbnail Image 1" class="img-responsive"></a>
       
      </div>
    </div>
 </div>

</div>
<br>

<?php
include('footer.html');
?>
<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>
</body>
</html>