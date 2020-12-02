<?php 
    require_once "includes/header.php";
    require_once 'includes/index.inc.php';
?>




<!-- CONTEUDO DA PAG -->
<div class="container mt-3">
    
    
    <?php 
    foreach ($posts as list($pId, $title, $body, $date)) {
        echo "<h1>Título: $title</h1>";
        echo "<h6>Data: $date</h6>";
        echo "<p>$body</p>";
        echo "<hr>";
    }
    ?>

    
 
    
    
    
    

</div>



<!-- //CONTEUDO DA PAG -->






