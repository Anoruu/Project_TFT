<?php
require_once ('./homepage/display.php');
require_once ('./homepage/request.php');
function handler_homepage(){
    $display = display_homepage();
    echo $display;
}
?>