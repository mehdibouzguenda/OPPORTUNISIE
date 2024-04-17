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
else if(!Validator::string($password,8,255)){
    $errors['username']='Please povide a valid password ';
}


if(!empty($errors)){
    return require ('views/Sessions/login.view.php');

}


//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);

$user=$db->query('select * from users where username= :username',[
    'username'=>$username,
])->find();

if(!$user){
    $errors['username']="No matching account found for this user name";
    //dd($errors);
    return require ('views/Sessions/login.view.php');
}
else if (password_verify($password,$user['password'])){
    //header('location : /BidenBU/ ');
    $_SESSION['user']=[
        'username'=>$username
    ];

    require('views/index.view.php');
    exit();
}else{

    $errors['username']="wrong password";
    require ('views/Sessions/login.view.php');
    exit();

}




//$db=App::resolve(Database::class);
//$config=require ('config.php');
//$db=new Database($config['database']);