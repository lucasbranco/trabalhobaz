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
        include_once 'headerlogado.php';
           $nomecookie = "usercookie";
        $user = $_COOKIE[$nomecookie];
    ?>
    
    
<form class="form-horizontal" action="../../model/cadastro_evento.php" method="post" id="mural">
    <!-- Form Name -->
<legend>Cadastrar</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="criador">Criador do evento</label>  
  <div class="col-md-4">
  <input id="criador" name="criador" type="text" placeholder="Criador" value="<?php echo "$user"; ?>" class="form-control input-md" required="">
  <span class="help-block">Nome de usuário do criador do evento para cadastro</span>  
  </div>
</div>

<!-- text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="titulo">Titulo</label>
  <div class="col-md-4">
    <input id="titulo" name="titulo" type="text" placeholder="" class="form-control input-md" required="">
    <span class="help-block">Titulo do evento para Cadastro</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="img">Imagem</label>  
  <div class="col-md-4">
  <input id="img" name="img" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Caminho da img que será utilizada.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="data">Data</label>  
  <div class="col-md-4">
  <input id="data" name="data" type="text" placeholder="00/00/00" class="form-control input-md" required="">
  <span class="help-block">Data do evento.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco">Endereço</label>  
  <div class="col-md-4">
  <input id="endereco" name="endereco" type="text" placeholder="Rua." class="form-control input-md" required="">
  <span class="help-block">Endereço do evento.</span>  
  </div>
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label" for="conteudo">Detalhes</label>  
  <div class="col-md-4">
      <textarea class="form-control" rows="5" type="text" name="conteudo" id="conteudo" ></textarea>
  <span class="help-block">Detalhes do evento.</span>  
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