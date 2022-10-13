<?php
session_start();

// from sessions

if (isset($_SESSION['user_id'])) {
  
    $user_id =$_SESSION['user_id'];
    $name =$_SESSION['name'];
}



//from cookies
// $user_id =$_COOKIE['user_id'];
// $name =$_COOKIE['name'];

echo "Hello " .$name;
?>