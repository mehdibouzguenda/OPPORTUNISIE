<?php

use core\Database;
use core\App;
use core\Validator;
use Http\Forms\LoginForm;

$username=$_POST["email"];

$password=$_POST["password"];
$errors=[];
/*$form = new LoginForm();

$errors=[];
if(!$form->Validate($username,$password)){
    return require('views/Sessions/login.view.php');
}*/

//// validation the form inputs.
//$errors=[];
//
//
//if(!Validator::string($username,5,255)){
//    $errors['username']='Please povide a valid username ';
//}
//else if(!Validator::string($password,8,255)){
//    $errors['username']='Please povide a valid password ';
//}
//
//
//if(!empty($errors)){
//    return require('views/Sessions/login.view.php');
//
//}


//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);
$email=$_POST["email"];
$user=$db->query('select * from user where email= :email',[
    'email'=>$email,
])->find();

if(!$user){
    $errors['info']="No matching account found for this Email";
    //dd($errors);
    return require('views/Sessions/login.view.php');
}
else if (password_verify($password,$user['password'])){
    //header('location : /BidenBU/ ');
    $_SESSION['id']=$user['user_id'];
    $_SESSION['role']=$user['role'];
    $_SESSION['username']=$username;
    $_SESSION['email']=$user['email'];
    $_SESSION['phone']=$user['phone'];
    $_SESSION['user']=$user;
    //dd($_SESSION);
    require('views/index.view.php');
    exit();
}else{

    $errors['username']="wrong password";
    require('views/Sessions/login.view.php');
    exit();

}




//$db=App::resolve(Database::class);
//$config=require ('config.php');
//$db=new Database($config['database']);