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
   <?php  
   include_once '../../model/bdacess.php';
    
        $nomecookie = "usercookie";
        $user = $_COOKIE[$nomecookie];
	    $sth = $conn->prepare("SELECT * FROM spacecasimiro.cadastro WHERE usuario = '$user'");
	    $sth->execute();
	    $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        $cont = count($results);
    //print_r($results);
    
        if ( $cont != 0){
            $email = $results[0]['email'];  
            $cpf = $results[0]['cpf']; 
            $telefone = $results[0]['telefone']; 
        }

   ?>
    <div class="container-fluid">
        <legend>Perfil</legend>
        <div class="row">
    <form class="form-horizontal col-md-6" action="../../model/editacadastro_bd.php" method="post" id="mural">
    <!-- Form Name -->
        
        
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailcadastro">Email</label>  
  <div class="col-md-6">
  <input id="emailusuario" name="emailusuario" type="text" placeholder="usuario@..." value="<?php echo "$email";?>" class="form-control input-md" required="">
  <span class="help-block">Digite Email para alterar Cadastro</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CPFcadastro">CPF</label>  
  <div class="col-md-6">
  <input id="CPFinput" name="CPFinput" type="text" placeholder="CPF" value="<?php echo "$cpf";?>"  class="form-control input-md" required="">
  <span class="help-block">Digite CPF para alterar Cadastro</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telinput">Telefone</label>  
  <div class="col-md-6">
  <input id="telinput" name="telinput" type="text" placeholder="(00)00000-0000" value="<?php echo "$telefone";?>"  class="form-control input-md" required="">
  <span class="help-block">Digite Telefone para alterar Cadastro</span>  
  </div>
</div>

<!-- Button  -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttonconfirma"></label>
  <div>
    <button class="btn btn-success" >Alterar</button>
  </div>
</div>


</form>
            <div class="col-md-5">
    <table class="table table-bordered" style="background-color: white">
    <thead>
      <tr>
        <th style="text-align: center">Tipo</th>
        <th style="text-align: center">Dados</th>
      </tr>
    </thead>
    <tbody>
        <?php
        
       
          $a = $results[0]['usuario'];
          $b = $results[0]['email'];
          $c = $results[0]['cpf'];
          $d = $results[0]['telefone'];
           
        echo "<tr><td>Usuário</td><td>$a</td></tr>";
         echo "<tr><td>Email</td><td>$b</td></tr>";
         echo "<tr><td>CPF</td><td>$c</td></tr>";
         echo "<tr><td>Telefone</td><td>$d</td></tr>";
        
        $conn = null;
          ?>

    
    </tbody>
  </table>
                
            </div>
     </div>
    </div>
  </body>
</html>