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
                echo "<h1>Título: $title</h1>";
                echo "<h6>Data: $date</h6>";
                echo "<p class='text-justify'>$body</p>";
                echo "<hr>";
            }
            ?>
        </div>
    </div>

</div>



<!-- //CONTEUDO DA PAG -->






