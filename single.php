<?php
require_once 'includes/header.php';
require_once 'includes/single.inc.php';

?>


<div class="main container mt-3">
    
    <div class="card">
        <div class="card-body">
            <?php
            $title = $post['title'];
            $body = $post['body'];
            $date = $post['date'];
            echo "<h1 class='text-center'>$title</h1>";
            echo "<p class='text-right'>$date</p>";
            echo "<p class='text-justify'>$body</p>";
            ?>
        </div>
    </div>

</div>




