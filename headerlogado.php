 <nav class="navbar navbar-default">
  <div class="container-fuild">
    <div class="navbar-header">
      <a class="navbar-brand"href="http://localhost/TrabalhoBazilio/view/paginas/indexlogado.php">Space Casimiro</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
      <ul class="nav navbar-nav navbar-right">
          <li><a href="http://localhost/TrabalhoBazilio/view/paginas/perfil.php"><span class="glyphicon glyphicon-user"></span>
        <?php
            $nomecookie = "usercookie";
            echo $_COOKIE[$nomecookie];
              
            ?>
              </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="http://localhost/TrabalhoBazilio/view/paginas/hospitaislogado.php">Unidades de Saúde</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="http://localhost/TrabalhoBazilio/view/paginas/transportelogado.php">Transporte</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="http://localhost/TrabalhoBazilio/view/paginas/eventologado.php">Eventos</a></li>
              <li><a href="http://localhost/TrabalhoBazilio/view/paginas/criaevento.php">Criar Eventos</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="http://localhost/TrabalhoBazilio/view/paginas/index.php">Logout</a>  
              </li>
          </ul>
        </li>
      </ul>
    </div>
 </div>
 </nav>