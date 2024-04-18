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
$router->get('/BidenBU/index.php','index.php');

$router->get('/BidenBU/employer.php','employer/employer.php');
$router->post('/BidenBU/employer/create','employer/create.php');
$router->delete('/BidenBU/employer/delete','employer/delete.php');

$router->get('/BidenBU/candidate.php','candidate.php');

$router->get('/BidenBU/job.php','job.php');
$router->get('/BidenBU/job-details.php','job-details.php');

$router->get('/BidenBU/blog','blog/blog.php');
$router->get('/BidenBU/blog-details','blog/blog-details/index.php');

$router->get('/BidenBU/login.php','Sessions/login.php');
$router->get('/BidenBU/register.php','registration/register.php')->only('guest');
$router->post('/BidenBU/login','Sessions/create.php');
$router->post('/BidenBU/register','registration/create.php');
$router->delete('/BidenBU/logout','Sessions/delete.php')->only('auth');

$router->get('/BidenBU/user-details','user/index.php');
$router->patch('/BidenBU/userUpdate','user/update.php');
$router->delete('/BidenBU/userDelete','user/delete.php');