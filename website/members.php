<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Members</title>

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
<h2 class="text-center">Members Login</h2>
<hr>
<?PHP

session_start();

if ((isset($_SESSION['login']) && $_SESSION['login'] != '')) {


header ("Location: membersarea.php");

}

?>





 <div class="container">
  <form action="login.php" method="post" name="form1"> <nav class="text-center">
  
 
      <label for="email">E-Mail:</label>
      <input type="text" name="email" id="email">
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" maxLength=10>
    </p>
    <p>
      <button type="submit" name="button" id="button" value="Login"  class="btn btn-primary">Login</button>
  </p>
    <p><a href="registration.php">New Member? Click here to register.</a></p>
</form>
  </nav>
</div>

<?php
include('footer.html');
?>
<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>
</body>
</html>