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
//dd($user);

$code=$_POST['code'];

if($code==$user['reset_token_hash']){
    require('views/forgotPassword/reenterPassword.view.php');
    exit();
}else{

    $errors['info']="Invalid code";
    require('views/forgotPassword/restPassword.view.php');
    exit();
}