<?php
require '../Data/UserControler.php';
$username=$_POST['username'];
$password=$_POST['password'];
$passwordRepeat=$_POST['passwordRepeat'];
$userControler=new UserControler();
$res=$userControler->tryToRegister($username,$password,$passwordRepeat);
echo($res);
?>