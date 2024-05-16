<?php


use core\Database;
use core\App;

$db = App::resolve(Database::class);
$post_id = (int) $_POST["id_post"];
$_SESSION["post_id"] = $post_id;
$post = $db->query("SELECT * FROM posts WHERE post_id = :post_id", [
    "post_id" => $post_id
])->get();
$comnts = $db->query("SELECT * FROM `comments` WHERE post_id = :post_id", [
    "post_id" => $post_id
])->get();
//dd($comnts);


require('views/blog/blog-details.view.php');