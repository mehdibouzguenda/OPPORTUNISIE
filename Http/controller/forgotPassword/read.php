<?php
use core\Database;
use core\App;
use core\Validator;

$db=App::resolve( Database::class);
//$config= require('config.php');
//$db=new Database($config['database']);
$errors=[];
$user=$db->query('select * from user where email= :email',[
    'email'=>$_SESSION['email']
])->find();

$code=$_POST['code'];
