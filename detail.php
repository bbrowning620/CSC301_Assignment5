<?php

require_once('functions.php');

$list = jsonToArray('data.json');

$title= $list[$_GET['id']]['name'];

require_once('header.php');

?>


  <div class="container">
    
    <h1><?= $list[$_GET['id']]['name']?> </h1>
    <p>Address: <?= $list[$_GET['id']]['address']?></p>
    <p>RSVP: <span class="badge badge-secondary"><?= $list[$_GET['id']]['rsvp']?></span></p>


  </div>
<?php
  require_once('footer.php');

