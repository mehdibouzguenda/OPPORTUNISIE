<?php

namespace core\Middeware;


class Auth{
    public function  handle()
    {

        if(!$_SESSION['user']??false){
          require('index.php');
           exit();
        }
    }
}