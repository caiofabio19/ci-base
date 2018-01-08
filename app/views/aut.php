<!DOCTYPE html>
<html>
<head>
	<title>Autenticação</title>
	<link rel="stylesheet" href="<?php echo APP_BASE.'/app/assets/css/testecss.css';?> ">
	<link rel="stylesheet" href="<?php echo APP_BASE.'/ci/app/assets/css/testecss.css';?> ">
	<link rel="stylesheet" href="<?php echo base_url('/ci/app/assets/css/testecss.css');?> ">
	<link rel="stylesheet" href="<?php echo base_url(APP_BASE.'/ci/app/assets/css/testecss.css');?> ">

</head>
<body>

    <div class="container">

      <form id="login" method="POST" class="form-signin" action="">

      	<a href="http://www.google.com">Aqui Link teste </a>
      	<a href="<?php echo APP_BASE.'/index.php/ci/app/controller/Welcome.php';?>">Aqui Link teste2 </a><br>
      	<a href="<?php echo base_url('/index.php/ci/app/controller/Welcome.php');?>">Aqui Link teste3 </a><br>
      	<a href="<?php echo base_url(APP_BASE.'/index.php/ci/app/controller/Welcome.php');?>">Aqui Link teste4 </a><br>
      	<a href="<?php echo base_url(APPPATH.'controller/Welcome.php');?>">Aqui Link teste5 </a><br>
      	<a href="<?php echo base_url('/index.php/ci/app/controller/Test.php');?>">Aqui Link teste6 </a><br>


        <h2 class="form-signin-heading">Faça Login</h2>
        <label for="inputEmail" class="sr-only">Endereço de Email</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembre-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

      </form>

    </div> <!-- /container -->
  </body>
</html>
