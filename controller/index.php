<?php

use core\Database;
use core\App;

$db = App::resolve(Database::class);

$comnts = $db->query('SELECT * FROM `comments`', [])->get();
//dd($blogs);

require('views/blog/blog-details.view.php');