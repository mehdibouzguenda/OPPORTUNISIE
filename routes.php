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
$router->get('/BidenBU/','controller/index.php');
$router->get('/BidenBU/employer.php','controller/employer/employer.php');

$router->get('/BidenBU/index.php','controller/index.php');
$router->get('/BidenBU/candidate.php','controller/candidate.php');
$router->get('/BidenBU/job.php','controller/job.php');
$router->get('/BidenBU/job-details.php','controller/job-details.php');
$router->get('/BidenBU/login.php','controller/Sessions/login.php');
$router->get('/BidenBU/register.php','controller/registration/register.php')->only('guest');
//$router->get('/BidenBU/register.php','controller/registration/register.php');
$router->post('/BidenBU/register','controller/registration/create.php');
$router->post('/BidenBU/employer/create','controller/employer/create.php');
$router->post('/BidenBU/login','controller/Sessions/create.php');
$router->delete('/BidenBU/employer/delete','controller/employer/delete.php');
$router->delete('/BidenBU/logout','controller/Sessions/delete.php');