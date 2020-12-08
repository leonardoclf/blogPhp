<?php
require_once 'includes/header.php';
require_once 'includes/dashboard.inc.php';




?>


<div class="main container mt-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nº Post</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($posts as list($pId, $title, $body, $date, $author)) {
                    
                    echo "<tr>";
                    echo "<th scope='row'>$pId</th>";
                    echo "<td>Autor: $title</td>";
                    echo "<td>$author</td>";
                    echo "<td> 
                            <a href='edit.php?pId=$pId'>Editar</a>
                            <a href='del.php?pId=$pId'>Apagar</a>
                        </td>";
                    echo "</tr>";  
                }
            ?>
        </tbody>
    </table>
</div>


