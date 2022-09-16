<?php

function user_controller_create(){
    render(VIEW_DIR.'/user/create.php');
}

function user_controller_insert($request){
    require(MODEL_DIR.'/user.php');
    $request = user_model_verification($request);
    user_model_insert($request);
    //header("Location: ?module=user&action=index");
}

function user_controller_view($request){
        //print_r($request);,
    require(MODEL_DIR.'/user.php');
    $user = user_model_view($request);
    $data = $user;
    //print_r($data);
    render(VIEW_DIR.'/user/view.php', $data);
}

function user_controller_edit($request){
    require(MODEL_DIR.'/user.php');
    user_model_edit($request);
    header("Location: ?module=user&action=index");
}

function user_controller_delete($request){
    require(MODEL_DIR.'/user.php');
    user_model_delete($request);
    header("Location: ?module=user&action=index");
}

function user_controller_login(){
    render(VIEW_DIR.'/user/login.php');
}

function user_controller_search($request){
    require(MODEL_DIR.'/authentication.php');
    authentication_model_search($request);
    render(VIEW_DIR.'/user/login.php');
    //header("Location: ?module=user&action=index");
}

function user_controller_logout(){
    require(MODEL_DIR.'/logout.php');
}

?>