<?php
require_once('lib_auth.php');
if(is_logged('user/uID')) header('location: index.php');

require_once('header.php');
?>
<?php

if(count($_POST)>0){
	$error=signin('data/users.csv.php','user/uID','index.php');
	if(isset($error{0})) echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
	else echo '<div class="alert alert-success" role="alert">You made it!!!!!!!!!!!</div>';
}

?>
<form action="signin.php" method="POST">
E-mail
<input class="form-control"type="email" name="email"  required /><br />
Password
<input class="form-control" type="password" name="password" minlength="8" required /><br />
<button type="submit" class="btn btn-primary">Access your account</button>
</form><?php

require_once('footer.php');