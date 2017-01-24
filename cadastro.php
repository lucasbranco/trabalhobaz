<!DOCTYPE html>
<html lang="br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Space Casimiro</title>
      
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
    
<body class="fundo">
    
     <?php
        include_once 'header.php';
    ?>
    
<form class="form-horizontal" action="../../model/cadastro_bd1.php" method="post" id="mural">
    <!-- Form Name -->
<legend>Cadastrar</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="logincadastro">Usuário</label>  
  <div class="col-md-4">
  <input id="loginusuario" name="loginusuario" type="text" placeholder="Usuário" class="form-control input-md" required="">
  <span class="help-block">Digite nome de Usuário para cadastro</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordcadastro">Senha</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="Senha" class="form-control input-md" required="">
    <span class="help-block">Digite Senha para Cadastro</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailcadastro">Email</label>  
  <div class="col-md-4">
  <input id="emailusuario" name="emailusuario" type="email" placeholder="usuario@..." class="form-control input-md" required="">
  <span class="help-block">Digite Email para Cadastro</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CPFcadastro">CPF</label>  
  <div class="col-md-4">
  <input id="CPFinput" name="CPFinput" type="text" placeholder="CPF" class="form-control input-md" required="">
  <span class="help-block">Digite CPF para Cadastro</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="enderecocadastro">Telefone</label>  
  <div class="col-md-4">
  <input id="telinput" name="telinput" type="text" placeholder="(00)00000-0000" class="form-control input-md" required="">
  <span class="help-block">Digite Telefone para Cadastro</span>  
  </div>
</div>

<!-- Button  -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttonconfirma"></label>
  <div class="col-md-8">
    <button class="btn btn-success" >Cadastrar</button>
  </div>
</div>


</form>

    
    
    
     
  </body>
</html>