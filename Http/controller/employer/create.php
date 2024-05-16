<?php


use core\Database;
use core\App;
use core\Validator;

$company_name=$_POST["company_name"];
$founded_year=$_POST["founded_year"];
$website=$_POST["website"];
$employees=$_POST["employees"];
$job_type="Freelance";

// validation the form inputs.
$errors=[];
//
//
//if(!Validator::string($company_name,5,255)){
//    $errors['username']='Please povide a valid username ';
//}
//if(!Validator::string($website,8,255)){
//    $errors['password']='Please povide a valid password ';
//}
//
//if(!Validator::string($employees,8)){
//    $errors['phone']='Please povide a valid phone ';
//}
//
//if(!empty($errors)){
//    return require('/BidenBU/employer.php') ;
//
//}

//check if the account already exist

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);

$db->query('INSERT INTO `user`(job_type ,company_name,employees,founded_year,website)  VALUES(:job_type,:company_name,:employees,:founded_year,:website)',[
        'job_type'=>$job_type,
        'company_name'=>$company_name,
        'employees'=>$employees,
        'founded_year'=>$founded_year,
        'website'=>$website
    ]);
require('views/index.view.php');
exit();
    // mark that the user has logged in.
    //$_SESSION['logged_in']=true;
//require('/BidenBU/employer.php');
