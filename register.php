<?php include 'themes/CDN.php'; ?>

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
                            <input type="text" name="username" placeholder="Enter Username">
                            <input type="password" name="password" placeholder="Enter Password">
                            <input type="password" name="password" placeholder="Reapeat Password">

                            <input type="button" value="Register">

                            <input type="button" id="login" value="login">
                        </div>
            </div>
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