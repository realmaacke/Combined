<?php
include 'themes/CDN.php';
require_once 'core/init.php';
include_once 'essential/mysqli.php';

$user = new User();

if(!$user->isLoggedIn()){
    Redirect::to('index.php');
}

if(Input::exists()) {
    if(Token::check(Input::get('token'))){
      $validate = new Validate();
      $validation = $validate->check($_POST, array(
          'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
             )
          ));

          if($validation->passed()){
              
            try{
                $user->update(array(
                    'name' => Input::get('name')
                ));

                Redirect::to('index.php');
            } catch(Exception $e){
                die($e->getMessage());
            }

          } else{
              echo $error;
          }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="themes/styles/update.css">
    <title>Combined Settings</title>
</head>
<body>


<div class="content">
    <div class="NameChange">
                <form action="" method="post">

            <div class="field">
                    <h2> Update Your Name</h2>
                <input type="text" name="name" value="<?php echo escape($user->data()->name); ?>">

                <input type="submit" value="Update">
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            </div>

            </form>



            <div class="Navigation">
        <a href="profile.php"><i class="fas fa-arrow-left"></i>  Return to profile page </a>
    </div>
    </div>
    <!-- <div class="picChange">
        <a href="changepassword.php">Change Password</a>
    </div> -->


    <div class="profilePic">
    <img src="" alt="">


  </div>
  <form action="pic.php" method="POST" enctype="multipart/form-data">

  <input type="file" name="file">
  <button type="submit" name="submit">Upload picture</button>

</form>







</div>





</body>
</html>