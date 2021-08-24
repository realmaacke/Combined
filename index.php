<?php 
include 'themes/CDN.php';
require_once 'core/init.php';

if(Session::exists('home')){
  echo '<p>'. Session::flash('home') .'<p>';
}

$user = new User();
if(!$user->isLoggedIn()){
  
} 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Combined Home Page</title>
    <link rel="stylesheet" href="themes/styles/navigation.css">
    <link rel="stylesheet" href="themes/styles/basic.css">

  </head>
  <body>

  </body>
</html>
