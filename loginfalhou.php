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
    session_start();
    include_once 'header.php'; 
              	
	if (!isset($_SESSION['CREATED'])) {
	    $_SESSION['CREATED'] = time();
	} else 
		if (time() - $_SESSION['CREATED'] > 1) { // 2 segundos
            session_destroy();
    ?>
               <script language= "JavaScript">
                  location.href="http://localhost/TrabalhoBazilio/view/paginas/login.php"
                </script>    
<?php
    
    
		}

            
        


       ?>
    
<form class="form-horizontal" action="../../model/login_bd.php" method="post" id="login">

<!-- Form Name -->
<legend>Acessar</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="usuariologin">Usuário</label>  
  <div class="col-md-4">
  <input id="loginusuario" name="loginusuario" type="text" placeholder="Usuário" class="form-control input-md" required="">
  <span class="help-block">Digite nome de Usuário para Acesso</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senhalogin">Senha</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="Senha" class="form-control input-md" required="">
    <span class="help-block">Digite Senha para Acesso</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttonconfirma"></label>
  <div class="col-md-8">
    <button class="btn btn-success" type="submit">Confirma</button> 
  </div>
</div>
</form>
    <div >
        <a href="cadastro.php" id="naoconta">Ainda não possui conta?</a>
    </div>
    
    <div class="container">
        
        
                    <div class="alert alert-danger" id="fracasso">
                        <strong>Usuário/Senha incorreto!</strong> 
                    </div>
        
        
    </div>
    
                ?>
               <script >
                   window.onload = function () {
                       setTimeout('location.reload();', 1500);
                }

                </script>    
<?php
?>
    
  </body>
</html>