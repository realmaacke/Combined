<?php 
include 'themes/CDN.php';
require_once 'core/init.php';

if(Input::exists()){
  if(Token::check(Input::get('token'))) {
  $validate = new Validate();
  $validation = $validate->check($_POST, array(
      'username' => array(
          'required' => true,
          'min' => 6,
          'max' => 20,
          'unique' => 'users'
      ),
      'password' => array(
        'required' => true,
        'min' => 6,
      ),
      'password_again' => array(
        'required' => true,
        'matches' => 'password'
      ),
      'name' => array(
        'required' => true,
        'min' => 2,
        'max' => 50
      ),
  ));

  if($validation->passed()){
    $user = new User();

    try{

      $user->create(array(
        'username' => Input::get('username'),
        'password' => Hash::make(Input::get('password')),
        'name' => Input::get('name'),
        'joined' => date('Y-m-d H:i:s'),
        'group' => 1
      ));

      Session::flash('home', 'You have been registered and can now log in!');
      Redirect::to("index.php");

    }catch(Exception $e) {
      die($e->getMessage());
    }
  }
  else{
    foreach($validation->errors() as $error){
      echo '<div style="color: red;">', $error, '</div> <br>';
    }
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
    <link rel="stylesheet" href="themes/styles/register.css">
    <title>Combined Register</title>
</head>
<body>

<style> 
/* Animation when clicking on Register */
.switch{
    animation: Register 2s ease;
}
@keyframes Register{
    0%{
        transform:translate(0);
    }
    100%{
        transform: translate(-2200px);
    }
}
</style>


<div class="content">
    <div class="container" id ="animate">
        <div class="row">
                <div class="col-sm">
                    <div class="left">
                    <div class="logo-class">
                               <h1>Register!</h1>
                    </div>
                    <div class="under-text">
                             <h4>All of your favorite platforms functions built into one!</h4>
                    </div>
                </div>
             </div>
                    <div class="col-sm"> </div>
                <div class="col-sm">
                        <div class="box">
                            <form action="" method="post">
                                    <input type="text" name="username" id="username" placeholder="Enter Username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
                                    <input type="password" name="password" id="password" placeholder="Enter Password">
                                    <input type="password" name="password_again" id="password_again" placeholder="Reapeat Password">
                                    <input type="text" name="name" placeholder="Enter your Name" value="<?php echo escape(Input::get('name')); ?>" id="name">

                                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                    <input type="submit" style="" class="submitBTN" name="" value="Register">
                            </form>
                        </div>
            </div>
        </div>
        <div class="made">
        <a href="login.php"><i class="fas fa-arrow-left"></i>  Back to Login </a>
    </div>
    </div>
</div>

<script> 
$('#login').click(function() {
    setTimeout(function () { location.href='login.php'; }, 1200);
    var element = document.getElementById("animate");
     element.classList.add("switch");
    $(this).unbind();
});

</script>

</body>
</html>