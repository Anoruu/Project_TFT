<?php
require_once ('./rules/display.php');
require_once ('./rules/request.php');
function handler_rules(){
    $display = display_rules();
    echo $display;
}
?>