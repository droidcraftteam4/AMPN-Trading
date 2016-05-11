<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap eCommerce Template</title>

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
<h2 class="text-center">Request Quote</h2>
<hr>
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm">
      <div class="thumbnail"><img src="New folder/img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Product</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center hidden-xs"></div>
  <nav class="text-left">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination">
      <li></li>
    </ul>
    <form method="post" name="form" action="http://formspree.io/insideoutlivingsolutions@gmail.com">
    Name:
    
      <input type="text" name="name" id="textfield">
   <br><br>
   
 Email:
      <input type="email" name="email" id="email">
 <br><br> Phone:
      <input type="tel" name="tel" id="tel">
<br> <br> Enquiry details (Qty required, when &amp; where):
        
     
 <br><br> <textarea name="textarea" cols="80" rows="10" id="textarea"></textarea>
 
    <p>&nbsp;</p>
    <input name="submit" type="submit" id="submit" formaction="http://formspree.io/insideoutlivingsolutions@gmail.com" value="Get Quote">
  </form>
    <p>&nbsp;</p>
  </nav>
</div>

<?php
include('footer.html');
?>
<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>
</body>
</html>