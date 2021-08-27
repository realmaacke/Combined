<?php include 'themes/CDN.php';
require_once 'core/init.php';

$user = new User();
if(!$user->isLoggedIn()){
  Redirect::to("login.php");
} 

$REL = new Relation();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="themes/styles/profile.css">
    <title>Combined Profile</title>
</head>
<body>

<?php 
  include 'navigation.php';
  ?>


    <div class="UserFriendBox">
        <?php
        $testUser = new User(2);
        echo $user->data()->id;
        echo $REL->Testdef(2);
        
        ?>
    </div>



</body>
</html>