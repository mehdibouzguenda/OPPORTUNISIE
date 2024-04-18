<?php
use core\Database;
use core\App;
use core\Validator;
//dd($_POST);
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$role=$_POST['Role'];

// validation the form inputs.
$errors=[];

if(!Validator::string($username,5,255)){
    $errors['username']='Please povide a valid username ';
}
else if(!Validator::string($password,8,255)){
    $errors['username']='Please povide a valid password ';
}
else if(!Validator::email($email)){
    $errors['username']='Please povide a valid email address ';
}
else if(!Validator::string($phone,8,8)){
    $errors['username']='Please povide a valid phone ';
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
        'password'=>password_hash($password, PASSWORD_BCRYPT),
        'email'=>$email,
        'role'=>$role,
        'phone'=>$phone

    ]);
    // mark that the user has logged in.

    login($user);
//    //$_SESSION['logged_in']=true;
//    $_SESSION['user']=[
//        'email'=>$email
//    ];

    require('views/index.view.php');
    exit();
}

