<?php 
    require_once "includes/header.php";
?>


<section class="form-register">
    <h4>Cadastro</h4>
    <form method="post" action="includes/register.inc.php"> 
                     
                <label for="nome_cad">Nome</label>
                <input id="nome_cad" name="userName" required="required" type="text" class="controls"/>
            

              
                <label for="nome_cad">Usuário</label>
                <input id="nome_cad" name="Uid" required="required" type="text" class="controls"/>
            
            
            
                <label for="email_cad">Email</label>
                <input id="email_cad" name="userEmail" required="required" type="email" class="controls"/> 
            
            
            
            
                <label for="senha_cad">Senha</label>
                <input id="senha_cad" name="userPwd" required="required" type="password" class="controls" />
    
            
            
            
                <label for="senha_cad">Confirme Senha</label>
                <input id="senha_cad" name="userPwdRpt" required="required" type="password" class="controls"/>
            
               
            
                <input type="submit" class="botons" name="register" value="Cadastrar"/> 
            
               
            <p>  
            Já tem conta?
            <a href="login.php"> Ir para Login </a>
            </p>
        
        
    </form>
</section>