<?php 
    require_once "includes/header.php";
?>


<div class="container" >
    
    
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      
      <form method="post" action="includes/login.inc.php"> 
        <h1>Login</h1> 
        <div class="form-group">
          <label for="email_login">Digite Usuário ou Email</label>
          <input id="email_login" name="uIdEmail" required="required" type="text" placeholder="Email.."/>
        </div>
        
        <div class="form-group">
          <label for="senha_login">Sua senha</label>
          <input id="senha_login" name="uPwd" required="required" type="password" placeholder="Senha.." /> 
        </div>
      
        
        <div class="form-group">
          <input type="submit" name="login" value="Entrar" /> 
        </div>
        
        <p class="link">
          Ainda não tem conta?
          <a href="#paracadastro">Cadastre-se</a>
        </p>
      </form>
      

</div>