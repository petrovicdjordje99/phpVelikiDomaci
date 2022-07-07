<?php
require '../Data/UserControler.php';
$username=$_POST['username'];
$password=$_POST['password'];
$userControler=new UserControler();
$res=$userControler->tryToLogin($username,$password);

echo $res;

?>