<?php
use core\Database;
use core\App;
use core\Validator;

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];

// validation the form inputs.
$errors=[];
if(!Validator::email($email)){
    $errors['email']='Please povide a valid email address ';
}

if(!Validator::string($username,5,255)){
    $errors['username']='Please povide a valid username ';
}
if(!Validator::string($password,8,255)){
    $errors['password']='Please povide a valid password ';
}

if(!Validator::string($phone,8,8)){
    $errors['phone']='Please povide a valid phone ';
}

if(!empty($errors)){
    return require('views/registration/register.view.php') ;

}

//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);

$user=$db->query('select * from users where email= :email',[
  'email'=>$email
])->find();

if($user){
    //header('location : /BidenBU/ ');
    require('login.php');
    exit();
}else{
    $db->query('INSERT INTO `users`(username ,password,email,role,phone)  VALUES(:username,:password,:email,:role,:phone)',[
        'username'=>$username,
        'password'=>$password,
        'email'=>$email,
        'role'=>'condidate',
        'phone'=>$phone

    ]);
    // mark that the user has logged in.
    //$_SESSION['logged_in']=true;
    $_SESSION['user']=[
        'email'=>$email
    ];

    require('views/index.view.php');
    exit();
}

