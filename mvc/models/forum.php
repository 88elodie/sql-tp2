<?php
function forum_model_insertforum($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $value = trim($value);
        $value = stripslashes($value);
        $$key=mysqli_real_escape_string($con,$value);
    }
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO forum (title, forum_content, author_id) VALUES ('$title', '$content', '$user_id')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function forum_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT title, forum_content, post_date, author_id, user_id, name FROM forum
LEFT OUTER JOIN user ON forum.author_id = user.user_id ORDER BY post_date DESC";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function forum_model_userview($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM forum WHERE author_id = '$user_id' ORDER BY post_date DESC";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function forum_model_forumview($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    //$user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM forum WHERE forum_id = '$id'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function forum_model_edit($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $value = trim($value);
        $value = stripslashes($value);
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "UPDATE forum SET title = '$title', forum_content = '$content' WHERE forum_id = '$forum_id'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function forum_model_delete($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "DELETE FROM forum WHERE forum_id = '$forum_id'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
