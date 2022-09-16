<?php
function forum_controller_view($request){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_userview($request);
    render(VIEW_DIR.'/user/user-forums.php', $data);
}

function forum_controller_create(){
    require(MODEL_DIR.'/forum.php');
    render(VIEW_DIR.'/user/create-forum.php');
}

function forum_controller_insert($request){
    require(MODEL_DIR.'/forum.php');
    forum_model_insertforum($request);
    header('Location: index.php');
}

function forum_controller_viewedit($request){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_forumview($request);
    render(VIEW_DIR.'/user/edit-forum.php', $data);
}

function forum_controller_edit($request){
    require(MODEL_DIR.'/forum.php');
    forum_model_edit($request);
    header("Location: ?module=forum&action=view");
}

function forum_controller_delete($request){
    require(MODEL_DIR.'/forum.php');
    forum_model_delete($request);
    header("Location: ?module=forum&action=view");
}