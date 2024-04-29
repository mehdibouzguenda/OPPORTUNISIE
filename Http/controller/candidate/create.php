<?php


use core\Database;
use core\App;
use core\Validator;

$fullName = $_POST['full_name'];
$languages = $_POST['languages'];
$age = $_POST['age'];
$location=$_POST['location'];
$expectedSalaryRange = $_POST['expected_salary_range'];
$salaryRange = $_POST['salary_range'];
$experienceYears = $_POST['experience_years'];

//dd($fullName);

$db=App::resolve( Database::class);

//$config= require('config.php');
//$db=new Database($config['database']);

$db->query('INSERT INTO candidates (full_name, languages, age, location, expected_salary_range, salary_range, experience_years) VALUES (:fullName, :languages, :age, :location, :expectedSalaryRange, :salaryRange, :experienceYears)',[
    'fullName'=>$fullName,
    'languages'=>$languages,
    'age'=>$age,
    'location'=>$location,
    'expectedSalaryRange'=>$expectedSalaryRange,
    'salaryRange'=>$salaryRange,
    'experienceYears'=>$experienceYears
]);
require('views/candidate.view.php');
exit();
// mark that the user has logged in.
//$_SESSION['logged_in']=true;
//require('/BidenBU/employer.php');
