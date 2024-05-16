<?php
use core\Database;
use core\App;
use core\Validator;
//dd($_POST);

$text=$_POST['cmnt'];

// validation the form inputs.
$errors=[];

if(!Validator::string($text,10,500)){
    $errors['username']='Please enter a cmnt ';
}
if(!empty($errors)){
    require('views/blog/blog-create.view.php');

}

//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);

$db->query('INSERT INTO `comments`(`user_id`,`post_id`, `commenter_name`, `comment`) VALUES (:userID , :post_id, :poster,:text)',[
        'userID'=>$_SESSION['id'],
        'post_id'=>$_SESSION['post_id'],
        'poster'=>$_SESSION['fullname'],
        'text'=>$text
    ]);
    //dd("done");
    //require('/BidenBU/blog/add-blog');
    //require('views/blog/blog.view.php');
echo '<script>window.location.href = "/BidenBU/blog-details";</script>';
    exit();