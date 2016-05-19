﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stretch Wrap & Associated Machinery</title>

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
<div class="container">
    <div class="row"></div>
</div>
<div class="container">
</div>
<hr>
<h2 class="text-center">Stretch Wrap & Associated Machinery</h2>
<hr>
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <div class="thumbnail"> <img src="New folder/img/stretch/hand_stretch_wrap.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Hand Stretch Wrap</h3>
         
          <p><a href="hand_stretch_wrap.php" class="btn btn-primary" role="button">View</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <div class="thumbnail"> <img src="New folder/img/stretch/machine_stretch_wrap.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Machine Stretch Wrap</h3>
        
          <p><a href="machine_stretch_wrap.php" class="btn btn-primary" role="button">View</a> </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <div class="thumbnail"> <img src="New folder/img/stretch/bundling_wrap.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Bundling Wrap</h3>
       
          <p><a href="bundling_wrap.php" class="btn btn-primary" role="button">View</a> </p>
        </div>
      </div>
    </div>



  



  <nav class="text-center"  hidden>
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination">
      <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li class="disabled"><a href="#">5</a></li>
      <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
    </ul>
  </nav>
</div>
<hr>
<?php
include('footer.html');
?>
<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>
</body>
</html>