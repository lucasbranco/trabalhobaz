<!DOCTYPE html>
<html lang="pt-br">
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
    <script src="evento.js"></script>

	</head>
    
	<body class="fundo">     
    <?php
        include_once 'headerlogado.php';
    
    ?>
          <div class="page-header">
                        <center>
                            <h1>Eventos</h1>
                        </center>
                    </div>
            
        
        
        <div  class="container">	
          
            <div class="row" id="evtp">
               <div class="row" style="margin-bottom: 20px;">
                   <div class="col-md-12">
                       <div class="row">
                           <div class="col-md-12">
                               <a href="">
                                   <div class="eventoimgp borda" style="background-image: url(../img/'+dados[i].img+');"> 
                                   </div>
                               </a>
                           </div>
                       </div>
                       <div class="list-group-item">
                       <div class="row">                            
                           <div class="col-md-12">                                
                               <h3>'+dados[i].titulo+'
                               </h3> 
                           </div>
                           </div>
                           <div class="row">    
                           <div class="col-md-3">  
                               <div class="glyphicon glyphicon-calendar">
                               </div>'+dados[i].data+'
                           </div> 
                        
                           <div class="col-md-3"> 
                               <div class="	glyphicon glyphicon-map-marker">
                               </div>'+dados[i].endereco+'</div>
                      
                           <div class="col-md-3"> 
                               <div class="glyphicon glyphicon-user">
                               </div>'+dados[i].criador+'</div>
                       </div>
                      
                       <div class="row"> 
                           <div class="col-md-12"> <div class="panel panel-info">
                                   '+dados[i].conteudo+'
                               </div>
                               </div>
                       </div>
                       </div>
                   </div>
                </div>
            </div>
             <div class="page-header">
           
                            <h2>Mais Eventos</h2>
                        
                    </div>
			<div class="row" id="evt"> 
                
                
                
            </div>
        </div>
	</body>
</html>