<?PHP

session_start();
session_destroy();
header('Location:members.php');

//header('Location:'.$_SERVER['HTTP_REFERER']);

?>