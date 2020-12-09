<?php 
   require_once "includes/header.php";
   $pId = $_GET["pId"];
   
?>
<div class="main container mt-3">
    <form action="includes/del.inc.php?pId=<?php echo $pId;?>" method="post">
        <label style="margin-top: 300px; margin-left: 300px;" class="alert alert-dark">Deseja realmente apagar o post?</label>
        <button class="btn btn-lg btn-danger" type="submit" name="del">Apagar</button> 
    </form>
</div>