<?php include 'themes/CDN.php';

require_once 'core/init.php';
if(Input::exists()){
  if(Token::check(Input::get('token'))) {
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
      'username' => array('required' => true),
      'password' => array('required' => true)
    ));

    if($validation->passed()){
      $user = new User();
      $login = $user->login(Input::get('username'), Input::get('password'));

      if($login){
        Redirect::to('index.php');
      } else {
        echo "Login Failed :/ <br>";
      }

    } else{
      foreach($validation->errors() as $error){
        echo $error, '<br>';
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
    <link rel="stylesheet" href="themes/styles/login.css">
    <title>Combined Login</title>
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
                               <h1>Combined</h1>
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
                                    <input type="text" name="username" id="username" placeholder="Enter Username" autocomplete="off">
                                    <input type="password" name="password" id="password" placeholder="Enter Password" autocomplete="off">
                                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                    <input type="submit" style="" class="submitBTN" name="" value="Login">
                            </form>
                            <a href="forgot.php"> Forgot your password ?</a>
                            <div class="Line"></div>

                            <input type="button" id="register" value="Register">
                        </div>
            </div>
        </div>
        <div class="made">
        <h1>Marcus Pettersson :D</h1>
    </div>
    </div>
</div>

<script>

$('#register').click(function() {
    setTimeout(function () { location.href='register.php'; }, 1200);
    var element = document.getElementById("animate");
     element.classList.add("switch");
    $(this).unbind();
});

</script>

</body>
</html>