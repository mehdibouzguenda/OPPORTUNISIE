<?php
//$config= require('config.php');
//$db=new Database($config['database']);
//$currentUserId=1;
//dd($_POST);
use core\Database;
use core\App;

$db=App::resolve( Database::class);

$db->query('delete FROM `employer` where employer_id = :id',['id'=>$_POST['employer_id_']]);


//header("Refresh:0");
//require('views/index.show.php');
//exit();
//dd($employers);
