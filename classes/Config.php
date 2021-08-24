<?php
class Config  {
  public static function get($path = null) {
    if($path){
      $config = $GLOBALS['config'];
      $path = explode('/', $path);

      foreach($path as $bit){ // Looping the mysql array inside init.php and checking if mysql contains host and so on.
        if(isset($config[$bit])){
          $config = $config[$bit];
        }
      }


      return $config;
    }
    return false;
  }
}
