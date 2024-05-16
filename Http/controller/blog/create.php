<?php
use core\Database;
use core\App;
use core\Validator;

$username=$_SESSION['username'];
$email=$_SESSION['email'];
$title=$_POST["title"];
$text=$_POST['cmnt'];

// validation the form inputs.
$errors=[];

/*if(!Validator::string($username,5,255)){
    $errors['username']='Please povide a valid username ';
}
else if(!Validator::email($email)){
    $errors['username']='Please povide a valid email address ';
}
else if(!Validator::string($title,3,255)){
    $errors['username']='Please povide a valid Title ';
}else if(!Validator::string($text,10,500)){
    $errors['username']='Please enter a cmnt ';
}
if(!empty($errors)){
    require('views/blog/blog-create.view.php');

}*/

//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);

$user=$db->query('select * from user where email= :email',[
    'email'=>$email
])->find();

if($user){
    $db->query('INSERT INTO `posts`(`user_id`,`title`, `content`, `author`) VALUES (:userid,:title,:text,:username)',[
        'userid'=>$_SESSION['id'],
        'title'=>$title,
        'username'=>$username,
        'text'=>$text,

    ]);
    //dd("done");
    //require('/BidenBU/blog');
    //header('/BidenBU/blog');
    //require('views/blog/blog.view.php');
    //require ('views/index.view.php');
    echo '<script>window.location.href = "/BidenBU/blog";</script>';
    exit();

}else{
    $errors['info']='you are not user yet ';
    exit();
}