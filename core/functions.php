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
    $_SESSION['user']=[
        'username'=>$user
    ];
    session_regenerate_id(true);
}

function logout(){
    $_SESSION=[];
    session_destroy();
    $params=session_get_cookie_params();
    setcookie('PHPSESSID','',time()-3600,$params['path'],$params['domain'],$params['secure'],$params['httponly']);
}