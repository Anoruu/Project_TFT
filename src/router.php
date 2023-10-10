<?php
function path_request(){
    $route = $_SERVER['REQUEST_URI'];
    if ($route === '/'){
        require_once('./homepage/handler.php');
        handler_homepage();
        return;
    }
    if ($route === '/addgame'){
        require_once('./addgame/handler.php');
        handler_addgame();
        return;
    }
    if ($route === '/history'){
        require_once('./history/handler.php');
        handler_history();
        return;
    }
    if ($route === '/rules'){
        require_once('./rules/handler.php');
        handler_rules();
        return;
    }
    echo '404 Error not found';
}
path_request();
?>