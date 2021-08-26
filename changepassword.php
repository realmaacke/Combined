<?php 
require_once 'core/init.php';

$user = new User();

if(!$user->isLoggedIn()){
    Redirect::to('login.php');
}

if(Input::exists()){
    if(Token::check(Input::get('token'))){
        
        $validate = new Validate();

        $validation = $validate->check($_POST, array(
            'password_current' => array(
                'required' => true,
                'min' => 6
                
            ),
            'password_new' => array(
                'required' => true,
                'min' => 6,
                'max' => 20,
            ),
            'password_new_again' => array(
                'required' => true,
                'min' => 6,
                'max' => 20,
                'matches' => 'password_new'
            ),
        ));

        if($validation->passed()){

            if(escape(Hash::make(Input::get('password_current'))) !== escape($user->data()->password)) {
                // Deny
            }else{
                $user->update(array(
                    'password' => Hash::make(Input::get('password_new')),
                ));
                Redirect::to('profile.php');
            }

        } else {
            foreach($validation->errors() as $error)
                 echo '<div style="color: red;">', $error, '</div> <br>';
        }
    }
}
?>



<form action="" method="post">

<div class="field">
    <label for="password_current">Current Password</label>
    <input type="password" name="password_current" id="password_current">
</div>

<div class="field">
    <label for="password_new">New Password</label>
    <input type="password" name="password_new" id="password_new">
</div>

<div class="field">
    <label for="password_new_again">Reapeat New Password</label>
    <input type="password" name="password_new_again" id="password_new_again">
</div>

<input type="submit" value="Change">
<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
</form>