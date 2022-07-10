<?php

require 'IUser.php';
require 'Database.php';
class UserControler implements IUser{

  
   
    public function __construct()
    {
    
    }

   
    //Overrides
  public  function tryToLogin($username,$password){
      $query="select * from users where username='$username' and password='$password'";
        $result=Database::getInstance()->conn->query($query);
        if($result->num_rows) return $result->num_rows;
        else return -1;
    }
    //Overrides
   public function tryToRegister($username,$password,$passwordRepeat){
    if($password!=$passwordRepeat) return -1;


        $query="INSERT INTO users(username,password) VALUES('$username','$password')";
        $result=Database::getInstance()->conn->query($query);
        if($result) return 1 ;
        else return -1;
    }
    
}