<?php
require_once ('./addgame/display.php');
require_once ('./addgame/request.php');
function handler_addgame(){
    $display = display_addgame();
    echo $display;
}

function processForm() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $placement = $_POST['placement'];
        $lpgain = $_POST['lpgain'];
        $host = 'localhost';
        $database = 'Project_TFT'; 
        $user = 'lucien'; 
        $password = 'root';

        $pdo = new PDO("pgsql:host=$host;dbname=$database", $user, $password);

        $query = "INSERT INTO table_name (placement, lpgain) VALUES (:placement, :lpgain)";
        $statement = $pdo->prepare($query);
        $statement->execute(['placement' => $placement, 'lpgain' => $lpgain]);
        // Redirect to another page or display a confirmation message
        header('Location: confirmation.php');
    }
}



?>