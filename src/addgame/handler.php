<?php
require_once ('./addgame/display.php');
require_once ('./addgame/request.php');
function handler_addgame(){
    $display = display_addgame();
    echo $display;
}
?>