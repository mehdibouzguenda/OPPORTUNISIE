<?php

$_SESSION=[];
session_destroy();
setcookie('PHPSESSID');
require('views/index.view.php');
exit();