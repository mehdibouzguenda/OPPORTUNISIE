<?php

namespace Http\Forms;
use core\Validator;
class LoginForm
{
    protected $errors=[];
    public function Validate($username,$password){
        // validation the form inputs.
        if(!Validator::string($username,5,255)){
            $this->$errors['username']='Please povide a valid username ';
        }
        else if(!Validator::string($password,8,255)){
            $this->$errors['username']='Please povide a valid password ';
        }

        return empty($this->$errors);
    }
}