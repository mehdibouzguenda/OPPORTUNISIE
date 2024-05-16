<?php
//return [
//    '/BidenBU/' => 'controller/index.php',
//    '/BidenBU/index.php' => 'controller/index.php',
//    '/BidenBU/candidate.php' => 'controller/candidate.php',
//    '/BidenBU/employer.php' => 'controller/employer.php',
//    '/BidenBU/job.php' => 'controller/job.php',
//    '/BidenBU/job-details.php' => 'controller/job-details.php',
//    '/BidenBU/login.php' => 'controller/login.php',
//    '/BidenBU/register.php' => 'controller/register.php',
//];
$router->get('/BidenBU/','index.php');
$router->get('/BidenBU/index','index.php');

$router->get('/BidenBU/blog/add-blog','blog/show.php');
$router->post('/BidenBU/blog/create','blog/create.php');
$router->delete('/BidenBU/blog/delete','blog/delete.php');

$router->post('/BidenBU/blog/comment/create','blog/blog-details/comment/create.php');



$router->get('/BidenBU/employer','employer/employer.php');
$router->post('/BidenBU/employer/create','employer/create.php');
$router->delete('/BidenBU/employer/delete','employer/delete.php');

$router->get('/BidenBU/candidate','candidate/read.php');
$router->post('/BidenBU/candidate/create','candidate/create.php');

$router->get('/BidenBU/job','job.php');
$router->get('/BidenBU/job-details.php','job-details.php');

$router->get('/BidenBU/blog','blog/blog.php');
$router->get('/BidenBU/blog-details','blog/blog-details/index.php');

$router->get('/BidenBU/login','Sessions/login.php');
$router->get('/BidenBU/register','registration/register.php')->only('guest');
$router->post('/BidenBU/login','Sessions/create.php')->only('guest');;
$router->post('/BidenBU/register','registration/create.php');
$router->delete('/BidenBU/logout','Sessions/delete.php')->only('auth');
$router->get('/BidenBU/forgotPassword','forgotPassword/forgotPassword.php');
$router->post('/BidenBU/forgotPassword','forgotPassword/create.php');
$router->post('/BidenBU/RestPasswordCode','forgotPassword/read.php');
$router->post('/BidenBU/newPassword','forgotPassword/update.php');


$router->get('/BidenBU/user-details','user/index.php');
$router->patch('/BidenBU/userUpdate','user/update.php');
$router->delete('/BidenBU/userDelete','user/delete.php');

$router->get('/BidenBU/user-details','user/index.php');


