<?php
namespace core\Middeware;


class Guest{
    public function handle(){
        if($_SESSION['user']??false){
            require('index.php');
            exit();
        }
    }
}