<?php
//dd('test');
//$config= require('config.php');
//$db=new Database($config['database']);
//$currentUserId=1;
use core\Database;
use core\App;

$db=App::resolve( Database::class);

$candidates=$db->query('SELECT * FROM `candidates`',[])->get();
//dd($employers);

require('views/candidate.view.php');