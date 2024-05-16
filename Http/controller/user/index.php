<?php
use core\Database;
use core\App;
use core\Validator;


//dd($_SESSION['user']['username']);
//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);

$user=$db->query('select * from user where email= :email',[
    'email'=>$_SESSION['user']['email']
])->find();
//dd($user);


if($user){
    $username=$user["username"];
    $email=$user["email"];
    $password=$user["password"];
    $phone=$user["phone"];
    $role=$user['role'];
    //header('location : /BidenBU/ ');
    require('views/user/user.view.php');
}


