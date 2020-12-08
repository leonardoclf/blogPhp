<?php 
    require_once "includes/header.php";
?>


<div class="container">
    <form method="post" action="includes/register.inc.php"> 
        <div class="form-group">
            <h1>Cadastro</h1> 
            
            <div class="form-group">  
                <label for="nome_cad">Seu nome</label>
                <input id="nome_cad" name="userName" required="required" type="text" placeholder="Nome.." />
            </div>

            <div class="form-group">  
                <label for="nome_cad">Seu Usuário</label>
                <input id="nome_cad" name="Uid" required="required" type="text" placeholder="Nome.." />
            </div>
            
            <div class="form-group">
                <label for="email_cad">Seu Email</label>
                <input id="email_cad" name="userEmail" required="required" type="email" placeholder="Email.."/> 
            </div>
            
            
            <div class="form-group">
                <label for="senha_cad">Sua senha</label>
                <input id="senha_cad" name="userPwd" required="required" type="password" placeholder="Senha.."/>
    
            </div>
            
            <div class="form-group">
                <label for="senha_cad">Confirme Senha</label>
                <input id="senha_cad" name="userPwdRpt" required="required" type="password" placeholder="Senha.."/>
            </div>
               
            <div class="form-group">
                <input type="submit" name="register" value="Cadastrar"/> 
            </div>
               
            <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
            </p>
        
        </div>
    </form>
</div>