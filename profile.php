<?php include 'themes/CDN.php';
require_once 'core/init.php';

$user = new User();
if(!$user->isLoggedIn()){
  Redirect::to("login.php");
} 

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


<div class="outer-container">
    <div class="content">
        <div class="feed">
            <h2 id="feed-Title">Title</h2>
             <h5 id=feed-msg>Message</h5>
             <div class="feed-line"></div>
             <div class="feed-interactions">
                    <button type="submit"><i class="far fa-heart"></i> 12</button>
             </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="userInfo">
                 <img src="img/avatar.png" id="avatar">
                  <h2><?php echo $user->data()->name; ?></h2>
                  <h4>Join date: <?php echo $user->data()->joined; ?></h4>
            <div class="Line"></div>
            <div class="Links">
                <ul>
                    <li><a href="update.php" >Settings <i class="fas fa-cog"></i></a></li>
                    <li><a href="">Achivements <i class="fas fa-medal"></i></a></li>
                    <li><a href="">Friends <i class="fas fa-users"></i></a></li>
                    <li><a href="">Add Friend <i class="fas fa-plus"></i></a></li>
                    <li><a href="logout.php">Sign out <i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>