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
$fullname=$_POST["fullname"];

// validation the form inputs.
$errors=[];

/*if(!Validator::string($username,5,255)){
    $errors['info']='Please povide a valid username ';
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
    return require('views/registration/register.view.php');

}*/

//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);
$errors=[];
$user=$db->query('select * from user where email= :email',[
  'email'=>$email
])->find();

if($user){
    //header('location : /BidenBU/ ');
    $errors['info']="Already registered";
    require('views/Sessions/login.view.php');
    exit();
}else{
    $db->query('INSERT INTO `user`(username,full_name,password,email,role,phone)  VALUES(:username,:fullname,:password,:email,:role,:phone)',[
        'username'=>$username,
        'fullname'=>$fullname,
        'password'=>password_hash($password, PASSWORD_BCRYPT),
        'email'=>$email,
        'role'=>$role,
        'phone'=>$phone

    ]);
    $user1=$db->query('select * from user where email= :email',[
        'email'=>$email
    ])->get();
    //dd($user1);
    // mark that the user has logged in.
    //session_regenerate_id(true);
    //dd($user);
    /*$_SESSION['id']=$user['user_id'];
    $_SESSION['role']=$role;
    $_SESSION['username']=$username;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['fullname']=$fullname;
    $_SESSION['user']=$user;*/
    login($user1);
//    //$_SESSION['logged_in']=true;
//    $_SESSION['user']=[
//        'email'=>$email
//    ];
    require('views/index.view.php');
    exit();
}

