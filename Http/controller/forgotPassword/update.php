<?php
use core\Database;
use core\App;
use core\Validator;
//dd("hii");
$db=App::resolve( Database::class);
//$config= require('config.php');
//$db=new Database($config['database']);
$errors=[];
$password=$_POST['password'];
$db->query('UPDATE user SET  password = :password  WHERE  email = :email', [

    'email' => $_SESSION['email'],
    'password'=>password_hash($password, PASSWORD_BCRYPT),
]);
$errors['info']="password changed successfully";
require('views/Sessions/login.view.php');
exit();
