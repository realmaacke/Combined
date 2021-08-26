<?php

$users = $REL->getUsers(); ?>

<div id="userList"><?php
  $requests = $REL->getReq($uid);
  $friends = $REL->getFriends($uid);
  foreach ($users as $id=>$name) { if ($id != $uid) {
    echo "<div class='urow'>";
    // USER ID & NAME
    echo "<div class='uname'> $name</div>";
 
    // BLOCK/UNBLOCK
    if (isset($friends['b'][$id])) {
      echo "<button onclick=\"relate('unblock', $id)\">Unblock</button>";
    } else {
      echo "<button onclick=\"relate('block', $id)\">Block</button>";
    }
 
    // FRIEND STATUS
    // FRIENDS
    if (isset($friends['f'][$id])) { 
      echo "<button onclick=\"relate('unfriend', $id)\">Unfriend</button>";
    }
    // INCOMING FRIEND REQUEST
    else if (isset($requests['in'][$id])) { 
      echo "<button onclick=\"relate('accept', $id)\">Accept Friend</button>";
    }
    // OUTGOING FRIEND REQUEST
    else if (isset($requests['out'][$id])) { 
      echo "<button onclick=\"relate('cancel', $id)\">Cancel Add</button>";
    }
    // STRANGERS
    else { 
      echo "<button onclick=\"relate('add', $id)\">Add Friend</button>";
    }
    echo "</div>";
  }}
?></div>
 
<form id="ninform" method="post" target="_self">
  <input type="hidden" name="req" id="ninreq"/>
  <input type="hidden" name="id" id="ninid"/>
</form>


<!-- css and scripts for buttons -->
<link rel="stylesheet" href="themes/styles/friends.css">
<script src="js/friends.js"></script>