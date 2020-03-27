<?php

require_once('functions.php');


if($_POST){
    $db=jsonToArray('data.json');
    $db[]=$_POST;
      writeJSON('data.json', $db);
};

$title='Create RSVP';
require_once('header.php');
?>

<h1><?=$title?></h1>
<form method="POST" action="create.php">

  <div class="form-group">
    <div class="col-5">
    <label for="exampleInputEmail1">Party Name</label>
    <input type="name" class="form-control" id="name">
  </div>
  </div>
  <div class="form-group">
    <div class="col-5">
    <label for="exampleInputPassword1">Address</label>
    <input type="address" class="form-control" id="address">
  </div>
  </div>
  </div>
  <div class="form-group">
    <div class="col-3">
    <label for="exampleInputPassword1">RSVP</label>
    <input type="RSVP" class="form-control" id="RSVP">
  </div>
  </div>
  <div class="form-inline">
  <div class="col-1">
  <button type="submit" name="create" class="btn btn-primary">Create</button>
  </div>
  <div class="col-1">
  <button type="button" class="btn btn-primary" onClick="document.location.href='index.php'">Cancel</button>
  </div>
</div>
<br>
<div class="col-1">
  <button type="button" class="btn btn-primary" onClick="document.location.href='index.php'">Back</button>
</div>
</form>



<?php
require_once('footer.php');