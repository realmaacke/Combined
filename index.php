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
    <link rel="stylesheet" href="themes/styles/style.css">
    <title>Combined Home</title>
  </head>
  <body>

  <?php 
  include 'navigation.php';
  ?>

  <div class="Content">

  <?php
  
  include 'friends.php';
  
  ?>



</div>

</body>
</html>

