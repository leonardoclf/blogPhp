<?php 

    require_once "includes/header.php";
    require_once 'includes/dbcon.inc.php';
    require_once 'includes/functions.inc.php';

    $pId = $_GET['pId'];
    $post = readOnePost($conn, $pId);
    $title = $post['title'];
    $body = $post['body'];

?>

<!-- CONTEUDO DA PAG -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<div class="main container mt-5">
    <h1 style="color: white;">Escrever</h1>
    <form action="includes/edit.inc.php?pId=<?php echo $pId?>" method="post">
        <div class="form-group">
            <label for="postTitulo"></label>
            <input class="form-control" type="text" name="postTitle" id="postTitulo" autocomplete="off" placeholder="<?php echo $title ?>" required autofocus>
        </div>
        <div class="form-group">
            <label for="postConteudo" style="color: white;">Conteúdo</label>
            <textarea id="editor" class="form-control" type="text" rows="10" cols="10" name="postBody" autocomplete="off"><?php echo $body ?></textarea>
        </div>        
        <button class="btn btn-primary" type="submit" name="submit">Editar</button>
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