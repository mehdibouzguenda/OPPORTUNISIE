<?php
require('views/registration/login.view.php');

use core\Database;
use core\App;


$db=App::resolve(Database::class);
//$config=require ('config.php');
//$db=new Database($config['database']);