<?php

// PROCESS RELATIONSHIP REQUEST
if (isset($_POST['req'])) {
    $pass = true;
    switch ($_POST['req']) {
      // (B1) ADD FRIEND
      case "add": $pass = $REL->request($uid, $_POST['id']); break;
      // (B2) ACCEPT FRIEND
      case "accept": $pass = $REL->acceptReq($_POST['id'], $uid); break;
      // (B3) CANCEL ADD
      case "cancel": $pass = $REL->cancelReq($uid, $_POST['id']); break;
      // (B4) UNFRIEND
      case "unfriend": $pass = $REL->unfriend($uid, $_POST['id'], false); break;
      // (B5) BLOCK
      case "block": $pass = $REL->block($uid, $_POST['id']); break;
      // (B6) UNBLOCK
      case "unblock": $pass = $REL->block($uid, $_POST['id'], false); break;
    }
  }