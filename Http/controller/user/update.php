<?php

use core\Database;
use core\App;
use core\Validator;

//dd($_POST);
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$role = $_POST['role'];

// validation the form inputs.
$errors = [];

if (!Validator::string($username, 5, 255)) {
    $errors['username'] = 'Please povide a valid username ';
} else if (!Validator::string($password, 8, 255)) {
    $errors['username'] = 'Please povide a valid password ';
} else if (!Validator::email($email)) {
    $errors['username'] = 'Please povide a valid email address ';
} else if (!Validator::string($phone, 8, 8)) {
    $errors['username'] = 'Please povide a valid phone ';
}

if (!empty($errors)) {
    return require('views/user/user.view.php');

}

$db = App::resolve(Database::class);

$user = $db->query('select * from user where username= :username', [
    'username' => $username,
])->find();

if (password_verify($password, $user['password'])) {
    $db->query('UPDATE user SET email= :email , phone = :phone , role= :role WHERE username = :username and email = :email', [

        'email' => $email,
        'phone' => $phone,
        'role' => $role,
        'username' => $username,
    ]);
    require('views/user/user.view.php');
    exit();
} else {
    $errors['username'] = "wrong password";
    require('views/user/user.view.php');
    exit();
}