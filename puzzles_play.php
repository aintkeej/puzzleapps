<?php
$nav_selected = "ADMIN";
$left_buttons = "YES";
$left_selected = "PUZZLES";

require_once __DIR__ . '/bootstrap.php';
include(ROOT_DIR . '/nav.php');
require ROOT_DIR . '/db_configuration.php';

?>

    <div class="right-content">
        <div class="container">

            <h1>Play Puzzle</h1>

        </div>
    </div>

<?php include("footer.php"); ?>