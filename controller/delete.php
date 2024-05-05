<?php
use core\Database;
use core\App;

$db=App::resolve( Database::class);

$db->query('delete FROM `comments` where comment_id = :id',['id'=>$_POST['comment_id_']]);

require('views/blog/blog.view.php');