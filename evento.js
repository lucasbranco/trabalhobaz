$(document).ready(function(){
	$('#evtp').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../../model/geteventos.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            var i=0;
           
			
				//Adicionando registros retornados na tabela
				$('#evtp').append('<div class="row" style="margin-bottom: 20px;">                   <div class="col-md-12">                       <div class="row">                           <div class="col-md-12">                               <a href="">                                   <div class="eventoimgp borda" style="background-image: url(../img/'+dados[i].img+');">                                    </div>                               </a>                           </div>                       </div>                       <div class="list-group-item">                       <div class="row">                      <div class="col-md-12">                                   <h3>'+dados[i].titulo+'                               </h3>                            </div>                           </div>                           <div class="row">                              <div class="col-md-3">                                 <div class="glyphicon glyphicon-calendar">                               </div>'+dados[i].data+'                           </div>                                                  <div class="col-md-3">                                <div class="	glyphicon glyphicon-map-marker">                               </div>'+dados[i].endereco+'</div>                           <div class="col-md-3">                                <div class="glyphicon glyphicon-user">                               </div>'+dados[i].criador+'</div>                       </div>                      <div class="row">                            <div class="col-md-12"> <div class="panel panel-primary">                                   '+dados[i].conteudo+'                               </div>                               </div>                       </div>                       </div>                   </div>                </div>');
            
			
		}
	});
});


$(document).ready(function(){
	$('#evt').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../../model/geteventos.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            
			for(var i=1 ;12>=i;i=i+3){
				//Adicionando registros retornados na tabela
				$('#evt').append('<div class="row" style="margin-bottom: 20px;"><div class="col-md-4"><div class="row"><div class="col-md-12"><a href=""><div class="eventoimg borda" style="background-image: url(../img/'+dados[i].img+');"> </div></a></div></div><div class="row">                            <div class="col-md-12">                                <a id="div1">'+dados[i].titulo+'</a>                            </div>                        </div>                        <div class="row">                            <div class="col-xs-12">                                <div class="glyphicon glyphicon-calendar"></div>'+dados[i].data+'</div>                   </div>                        <div class="row">                            <div class="col-xs-12">                                <div class="	glyphicon glyphicon-map-marker"></div>'+dados[i].endereco+'</div>                        </div>	                    </div>                    <div class="col-sm-4">                       <div class="row">                            <div class="col-xs-12">                                <a href="">                                    <div class="eventoimg borda" style="background-image: url(../img/'+dados[i+1].img+');"> </div>                                </a>	                            </div>                        </div>                        <div class="row">                            <div class="col-xs-12">                                <a id="div2">'+dados[i+1].titulo+'</a>                            </div>	                        </div>                        <div class="row">                            <div class="col-xs-12">                                <div class="glyphicon glyphicon-calendar"></div>'+dados[i+1].data+'</div>                            </div>                        <div class="row">                            <div class="col-xs-12">                                <div class="	glyphicon glyphicon-map-marker"></div>'+dados[i+1].endereco+'</div>                        </div>	                    </div>                    <div class="col-sm-4 eventBox">                        <div class="row">                            <div class="col-xs-12">                                <a href="">                                    <div class="eventoimg borda" style="background-image: url(../img/'+dados[i+2].img+');"> </div>                                </a>	                            </div>                        </div>                        <div class="row">                            <div class="col-xs-12">                                <a href="">'+dados[i+2].titulo+'</a>	                            </div>	                        </div>			                        <div class="row">                            <div class="col-xs-12">                          <div class="glyphicon glyphicon-calendar"></div>'+dados[i+2].data+'</div>                        </div>                       <div class="row">                            <div class="col-xs-12">                               <div class="	glyphicon glyphicon-map-marker"></div>'+dados[i+2].endereco+'</div>                        </div>	                    </div>                </div>');
            
			}
		}
	});
});