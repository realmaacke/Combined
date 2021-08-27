<?php

// Relationships Switch
if (isset($_POST['req'])) {
    $pass = true;
    switch ($_POST['req']) {
      case "add": $pass = $REL->request($uid, $_POST['id']);
       break;
      case "accept": $pass = $REL->acceptReq($_POST['id'], $uid);
       break;
      case "cancel": $pass = $REL->cancelReq($uid, $_POST['id']);
       break;
      case "unfriend": $pass = $REL->unfriend($uid, $_POST['id'], false);
       break;
      case "block": $pass = $REL->block($uid, $_POST['id']); break;
      case "unblock": $pass = $REL->block($uid, $_POST['id'], false);
       break;
    }
  }