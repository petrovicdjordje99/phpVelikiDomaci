<?php 
 interface IUser{
    function tryToLogin($username,$password);
     function tryToRegister($user,$password,$passwordRepeat);
    
}