<?php



use core\Database;
use core\App;

global $blogs;
$db = App::resolve(Database::class);

$blogs = $db->query('SELECT * FROM `posts`', [])->get();
//dd($blogs);
//dd($blogs);

require('views/blog/blog.view.php');