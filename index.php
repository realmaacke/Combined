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

  <div class="TopContent">
        <input type="text" name="names" placeholder="Search" id="search">
  </div>
  <div id="show_up"></div>

</div>



</body>
</html>


<script>
$(document).ready(function(e){
	$("#search").keyup(function(){
		$("#show_up").show();
		var text = $(this).val();
		$.ajax({
			type: 'GET',
			url: 'search.php',
			data: 'txt=' + text,
			success: function(data){
				$("#show_up").html(data);
			}
		});
	})
});
</script>

