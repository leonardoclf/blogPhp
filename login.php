<?php 
    require_once "includes/header.php";
?>


<!--FORMULÁRIO DE LOGIN-->
<section class="form-register">
      <form method="post" action="includes/login.inc.php"> 
      <h4>Entrar</h4> 
          <label for="email_login">Usuário ou Email</label>
          <input id="email_login" name="uIdEmail" required="required" type="text" class="controls"/>
          <label for="senha_login">Senha</label>
          <input id="senha_login" name="uPwd" required="required" type="password" class="controls" /> 
          <input class="botons" type="submit" name="login" value="Entrar" /> 
        <p>
          Ainda não tem conta?
          <a href="register.php">Cadastre-se</a>
        </p>
      </form>
</section>