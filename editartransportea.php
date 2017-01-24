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
    ?>
    <div class="container-fluid">
<form class="form-horizontal" action="../../model/cadastro_bdta.php" method="post" id="mural">
    <!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="saidaca">Casimiro de Abreu(saída)</label>  
  <div class="col-md-4">
  <input id="saidaca" name="saidaca" type="text" placeholder="00:00" class="form-control input-md" required="">
  <span class="help-block">Digite o Horário de Saída de Casimiro de Abreu</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="saidaro">Rio das Ostras(saída)</label>  
  <div class="col-md-4">
  <input id="saidaro" name="saidaro" type="text" placeholder="00:00" class="form-control input-md" required="">
  <span class="help-block">Digite o Horário de Saída de Rio das Ostras</span>  
  </div>
</div>

<!-- Button  -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttonconfirma"></label>
  <div class="col-md-8">
    <button class="btn btn-success" >Adicionar</button>
  </div>
</div>


</form>

    </div>
    

     
  </body>
</html>