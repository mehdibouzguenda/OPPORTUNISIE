<?php
use core\Database;
use core\App;

$db=App::resolve( Database::class);

$db->query('delete FROM `posts` where post_id = :id',['id'=>$_POST['blog_id_']]);

require('views/blog/blog.view.php');