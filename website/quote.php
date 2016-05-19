<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Request Quote</title>

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


<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {


header ("Location: members.php");

}

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
  
  
  <nav class="text-left">
   
 

<form method="post" name="form" action="http://formspree.io/droidcraftteam@gmail.com">
    <p>Name:
  <input type="text" name="name" id="name">
      <br><br>
      
      Email:
      <input type="email" name="email" id="email">
      <br><br> Phone:
      <input type="tel" name="phone" id="phone">
    </p>
    <p>      <br>
    </p>
    <div class="form-group">
      Select Product:
      <select multiple class="form-control" size=10 id="products" name="products[]">

    <option>Filament Tape</option>
    <option>Masking Tape</option>
    <option>Printed Tape - Fragile</option>
    <option>Duct Tape</option>
    <option>Printed Tape - Top Load Only</option>
    


    <option>Hand Stretch Wrap</option>
    <option>Machine Stretch Wrap</option>
    <option>Bundling Wrap</option>
    


    <option>Mini Grip Bags</option>


    <option>Corrugated Cardboard</option>
    <option>Angle Board</option>



    <option>Polycell Bubble Wrap</option>
    <option>Poly Foam</option>



    <option>Polyester Strap</option>
    <option>Plastic Buckles</option>
    <option>Wire Buckles</option>
    <option>Seals</option>
    <option>Steel Strap</option>



  </select>
</div><br> 
Enquiry details (Qty required, when &amp; where):
        
     
 <br><br> <textarea name="enquiry" cols="80" rows="10" id="enquiry"></textarea>
 
    <p>&nbsp;</p>
<button name="submit" type="submit" id="submit" value="Save"  class="btn btn-primary" formaction="savequote.php" >Save</button>
    <button name="submit" type="submit" id="submit" value="Get Quote"  class="btn btn-primary" formaction="http://formspree.io/droidcraftteam@gmail.com" >Get Quote</button>
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