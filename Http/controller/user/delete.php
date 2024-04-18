<?php

use core\Database;
use core\App;
use core\Validator;

$username = $_POST["username"];
//$password=$_POST["password"];
$email = $_POST["email"];

if (!Validator::string($username, 5, 255)) {
    $errors['username'] = 'Please povide a valid username ';
}
//else if(!Validator::string($password,8,255)){
//    $errors['username']='Please povide a valid password ';
//}


if (!empty($errors)) {
    return require('views/registration/register.view.php');

}

$db = App::resolve(Database::class);

//if (password_verify($password, $user['password'])) {
$db->query('delete FROM `users` where username = :username and email = :email ',

    [   'username' => $username,
        'email'=>$email
    ]);
require('views/user/user.view.php');
exit();
//}