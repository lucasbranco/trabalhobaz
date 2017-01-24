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
<body class="funt">
    
    <?php
        include_once 'header.php';
    ?>
   <?php  
   include_once '../../model/bdacess.php';
	    $sth = $conn->prepare("SELECT * FROM spacecasimiro.transporte2");
	    $sth->execute();
	    $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        $cont = count($results);
   ?>

    
 <div class="container-fluid">

        <center>
     <h1 class="uds" id="fundobranco1">Tabela de Horários</h1>
         </center>
     <br>
     <center>
  <p id="tranp" >Linha B480: Casimiro de Abreu X Barra de São João</p>
   </center>
  <table class="table table-bordered" id="fundobranco">
    <thead>
      <tr>
        <th>Casimiro de Abreu(saída):</th>
        <th>Barra de São João(saída):</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        while ($i < $cont) {
          $a = $results[$i]['sca'];
          $b = $results[$i]['sba'];
             echo  "<tr><td>$a</td><td>$b</td></tr>";
            $i ++;
        }
        $conn = null;
          ?>
    
    </tbody>
  </table>
       <div class="btn-group btn-group-lg">
      <a class="btn btn-primary" href="http://localhost/TrabalhoBazilio/view/paginas/transporte.php">Linha B170: Casimiro de Abreu X Rio das Ostras</a>
        <a class="btn btn-success" href="http://localhost/TrabalhoBazilio/view/paginas/maps6.php">Trajeto</a>
    </div>
</div>
    
        
  
  </body>
</html>