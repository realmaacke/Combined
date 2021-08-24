<?php
session_start();

$GLOBALS['config'] = array( // Making the config global for all files to Get  (   init::GET()   )
  'mysql' => array(
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'db' => 'combined'
  ),
  'remember' => array(
    'cookie_name' => 'hash',
    'cookie_expiry' => 604800
  ),
  'session' => array(
    'session_name' => 'user',
    'token_name' => 'token'
  )
);

spl_autoload_register(function($class) {   // Function that require classes with the $class function (more efficient)
  require_once  'classes/'.$class.'.php';
});

require_once 'functions/sanitize.php';
