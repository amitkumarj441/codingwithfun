<?php
  $usr="qwerty123";
  $pwd="qwerty123";
  
  if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']))
  {
    $username=$_POST['username];
    $password=$_POST['password'];
  }
  else
  {
    $msg='Wrong username and password';
  }
?>  
