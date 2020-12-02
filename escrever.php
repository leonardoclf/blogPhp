<?php require_once "includes/header.php";?>



<!-- CONTEUDO DA PAG -->
<div class="main container mt-5">
    <h1>Escrever</h1>
    <form action="includes/escrever.inc.php" method="post">
        <div class="form-group">
            <label for="postTitulo">Título</label>
            <input class="form-control" type="text" name="postTitle" id="postTitulo" autocomplete="off" required autofocus>
        </div>
        <div class="form-group">
            <label for="postConteudo">Conteúdo</label>
            <textarea class="form-control" type="text" rows="10" cols="10" name="postBody" autocomplete="off" required></textarea>
        </div>        
        <button class="btn btn-primary" type="submit" name="submit">Publicar</button>
    </form>
</div>
<!-- //CONTEUDO DA PAG -->










<?php require_once "includes/footer.php"; ?>





