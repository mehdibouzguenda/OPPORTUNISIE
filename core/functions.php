<?php



function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function authorize($condition,$status=Response::FORBIDDEN){
    if(!$condition){
        abord($status);
    }
}

function base_path($path)
{
    //return BASE_PATH.$path;
    return $path;
}

function view($path,$attributes=[]){
    extract($attributes);
    return require ('view/'.$path);
}

function login($user){
    session_regenerate_id(true);
    //dd($user);
    $_SESSION['id'] = $user[0]['user_id'];
    $_SESSION['role'] = $user[0]['role'];
    $_SESSION['username'] = $user[0]['username'];
    $_SESSION['email'] = $user[0]['email'];
    $_SESSION['phone'] = $user[0]['phone'];
    $_SESSION['fullname'] = $user[0]['full_name'];
    $_SESSION['user'] = $user[0];

}

function logout(){
    $_SESSION=[];
    session_destroy();
    $params=session_get_cookie_params();
    setcookie('PHPSESSID','',time()-3600,$params['path'],$params['domain'],$params['secure'],$params['httponly']);
}