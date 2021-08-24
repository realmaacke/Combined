<?php 
include 'themes/CDN.php';
require_once 'core/init.php';

if(Session::exists('home')){

}

$user = new User();
if(!$user->isLoggedIn()){
  Redirect::to("login.php");
} 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="themes/styles/home.css">
    <title>Combined Home</title>
  </head>
  <body>

  <a href="profile.php">Profile</a>

  </body>
</html>
