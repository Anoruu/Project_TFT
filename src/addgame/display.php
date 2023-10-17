<?php

function display_addgame(){
    echo '
    <h1>TFT History, the website that helps you to track your games and lp gains</h1>
    <body>
    <nav class="navbar">
        <ul>
            <li><a href="../addgame">Add a game</a></li>
            <li><a href="../history">History</a></li>
            <li><a href="../rules">Rules</a></li>
            </ul>
    </nav>
        <form action="request.php" method="post">
        <input type="text" name="placement" placeholder="Placement">
        <input type="text" name="lpgain" placeholder="LP gain">
        <button type="submit">Send</button>
    </form>

    <p> Cest la big page addgame le sang</p>
    </body>
    ';
}
?>