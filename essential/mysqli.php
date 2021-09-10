<?php 


// DATABASE SETTINGS
define('DB_HOST', 'localhost');
define('DB_NAME', 'combined');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');




$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);