<?php
// sanitizing the data passing in and out. (like mysqli_real_escape_string)
// (making data => strings so it cant be sql injected)
function escape($string){
  return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
