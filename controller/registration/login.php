<?php

use core\Database;
use core\App;
use core\Validator;

$username=$_POST["username"];

$password=$_POST["password"];


// validation the form inputs.
$errors=[];


if(!Validator::string($username,5,255)){
    $errors['username']='Please povide a valid username ';
}
if(!Validator::string($password,8,255)){
    $errors['password']='Please povide a valid password ';
}


if(!empty($errors)){
    return require('views/registration/register.view.php') ;

}


//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);

$user=$db->query('select * from users where username= :username and password= :password',[
    'username'=>$username,
    'password'=>$password
])->find();

if($user){
    //header('location : /BidenBU/ ');
    $_SESSION['user']=[
        'username'=>$username
    ];

    require('views/index.view.php');
    exit();
}else{

    require('views/registration/register.view.php');
    exit();

}




//$db=App::resolve(Database::class);
//$config=require ('config.php');
//$db=new Database($config['database']);