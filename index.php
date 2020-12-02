<?php 
    require_once "includes/header.php";
    require_once 'includes/index.inc.php';
?>




<!-- CONTEUDO DA PAG -->
<div class="main container mt-3">
    
    <div class="card">
        <div class="card-body">
            <?php 
            foreach ($posts as list($pId, $title, $body, $date)) {
                $bodyTrunc = substr($body, 0, 100);
                echo "<h1>$title</h1>";
                echo "<h6>$date</h6>";
                echo "<p class='text-justify my-5'>$bodyTrunc...</p>";
                echo "<a href='single.php?pId=$pId'>Leia Mais</a>";
                echo "<hr>";
            }
            ?>
        </div>
    </div>

</div>



<!-- //CONTEUDO DA PAG -->






