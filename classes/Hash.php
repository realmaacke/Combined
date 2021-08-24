<?php
require_once 'functions/sanitize.php';
class Hash{
      public static function make($string){  // Make a Hash
        return hash('sha256', $string);
      }

      public static function unique(){  // Make a unique token
        return self::make(uniqid());
      }
}
