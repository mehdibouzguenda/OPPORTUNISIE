

<?php

//$config= require('config.php');
//$db=new Database($config['database']);
//$currentUserId=1;
use core\Database;
use core\App;

$db=App::resolve( Database::class);

$employers=$db->query('SELECT * FROM `employer`',[])->get();
//dd($employers);

require('views/employer.view.php');