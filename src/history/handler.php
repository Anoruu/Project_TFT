<?php
require_once ('./history/display.php');
require_once ('./history/request.php');
function handler_history(){
    $display = display_history();
    echo $display;
}
?>