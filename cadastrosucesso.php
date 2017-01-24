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
    
    <center>
                    <div class="alert alert-success">
                        <strong>Cadastrado com sucesso!</strong> Você será redirecionado para página de login em instantes.
                    </div>
        </center>
        
    
    
                
               <script >
                   window.onload = function () {
                       setTimeout('location.reload();', 3500);
                }

                </script>    


    
    
    
     
  </body>
</html>