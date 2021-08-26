<?php
require_once 'core/init.php';
$user = new User();

if(!$user->isLoggedIn()){
    Redirect::to('login.php');
}

if(!$user->data()->id == 1){
    Redirect::to('login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogBok</title>
</head>
<body>
        <h1>TODO LIST </h1>

        <ul>
            <li><p><span style="color: green;">Login/register</span></p></li>
            <li><p><span style="color: green;">Validate/ hash </span></p></li>
            <li><p><span style="color: green;">DB configured </span></p></li>
            <li><p><span style="color: green;">Classes </span></p></li>
            <li><p><span style="color: yellow;">Protection, crf protection, sql injection </span></p></li>
            <li><p><span style="color: red;">Friend system </span></p></li>
            <li><p><span style="color: red;">Post system </span></p></li>
            <li><p><span style="color: red;">Like system </span></p></li>
            <li><p><span style="color: red;">Comment system </span></p></li>
            <li><p><span style="color: red;">search system, (both users and categorys) </span></p></li>
            <li><p><span style="color: red;">Direct message system </span></p></li>
            <li><p><span style="color: red;">Discover posts Random </span></p></li>
            <li><p><span style="color: red;">Add more tables in DB</span></p></li>

            <h2>Work in progress</h2>
            <li><p>UI, CSS, themes</p></li>

            <h2>Desicions</h2>
            <li>Were to store profile pics (db | local)</li>
            <li>Use python as web server or Xampp?</li>
        </ul>
</body>
</html>