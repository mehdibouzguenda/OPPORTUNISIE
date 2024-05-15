<?php

use core\Database;
use core\App;
use core\Validator;


require 'core/mailer.php';

$email = $_POST['Email'];
$token = rand(111111, 999999);
//$token_hash = hash("sha256", $token);
$expiry= date("Y-m-d", time() + 60 * 30);


$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);
$errors=[];


$user=$db->query('select * from user where email= :email',[
    'email'=>$email
])->find();

if($user){
    $db->query('UPDATE user set reset_token_hash = :token , reset_token_expires_at = :expiry where email = :email',[
        'expiry' => $expiry,
        'token' => $token,
        'email' => $email
    ]);
    $subject = "Password Reset Code";
    $message = "Your password reset code is $token";
    //$sender = "From: mehdibouzguenda@gmail.com";
    if(SendMail($email,$subject,$message)){
        $errors['info']= "We've sent a passwrod reset otp to your email - $email";
        $_SESSION['email'] = $email;
        require('views/forgotPassword/reenterPassword.view.php');
        exit();
    }else{
        $errors['info'] = "Failed while sending code!";
    }
}else{
    $errors['info'] = "Email does not exist!";
    require('views/forgotPassword/forgotPassword.view.php');
}

