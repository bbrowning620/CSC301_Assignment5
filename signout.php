<?php
require_once('lib_auth.php');

if(is_logged('user/uID')) signout('signin.php');
else header('location:signin.php');

require_once('header.php');
echo 'You just signed out';

require_once('footer.php');