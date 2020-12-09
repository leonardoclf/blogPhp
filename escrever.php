<?php require_once "includes/header.php";?>



<!-- CONTEUDO DA PAG -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<div class="main container mt-5" ">
    <h1 style="color: #fff;" >Escrever</h1>
    <form action="includes/escrever.inc.php" method="post">
        <div class="form-group">
            <label style="color: #fff;" for="postTitulo">Título</label>
            <input class="form-control" type="text" name="postTitle" id="postTitulo" autocomplete="off" required autofocus>
        </div>
        <div class="form-group">
            <label style="color: #fff;" for="postConteudo">Conteúdo</label>
            <textarea  id="editor" class="form-control" type="text" rows="10" cols="10" name="postBody" autocomplete="off"></textarea>
        </div>        
        <button class="btn btn-primary" type="submit" name="submit">Publicar</button>
    </form>
</div>

<script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>
<!-- //CONTEUDO DA PAG -->
















