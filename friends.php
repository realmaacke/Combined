<?php
require "classes/Relation.php";
require_once 'core/init.php';

$user = new User();
if(!$user->isLoggedIn()){
  Redirect::to("login.php");
} 

$uid = $REL->GrabUserID();  // Grabing real userID from returned Data()->id;

// Including essential files for the system
include 'includes/Relationinc/RelationSTMT.php';
include 'includes/Relationinc/showFriends.php';

