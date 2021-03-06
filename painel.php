﻿<!DOCTYPE html>
<html>
<head>
      <title>Template HTML5</title> 
     
     <meta name="viewport" content="width-device-width initial-scale-1.0">
     <meta chasert="UTF-8">
    <title>Template HTML5</title>
    
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
     <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <link href="css/painel.css" rel="stylesheet" media="all">
     
</head>
 <body data-spy="scroll" data-target=".menu-navegacao" data-offset="80">
     
     <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Clinica Inteligente</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav navbar-right">      
        
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Adicionar Plano de Saúde</a></li>
            <li><a href="#">Excluir Plano de Saúde</a></li>
            <li><a href="#">Editar Plano de Saúde</a></li> 
            <li><a href="#">Ver todos os Plano de Saúde</a></li> 
          </ul>
        </li>    
         
              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-medkit fa-2x" aria-hidden="true"></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Adicionar Procedimento</a></li>
            <li><a href="#">Excluir Procedimento</a></li>
            <li><a href="#">Editar Procedimento</a></li> 
            <li><a href="#">Ver todos os Procedimento</a></li> 
          </ul>
        </li>   
          
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-md fa-2x" aria-hidden="true"></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Adicionar Medico</a></li>
            <li><a href="#">Excluir Medico</a></li>
            <li><a href="#">Editar Medico</a></li> 
            <li><a href="#">Ver todos os Medicos</a></li> 
          </ul>
        </li>
          
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-hospital-o fa-2x" aria-hidden="true"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Adicionar Clinica</a></li>
            <li><a href="#">Excluir Clinica</a></li>
            <li><a href="#">Editar Clinica</a></li>  
            <li><a href="#">Ver todas Clinicas</a></li> 
          </ul>
        </li>
          
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search fa-2x" aria-hidden="true"></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Procurar Paciente</a></li>
            <li><a href="#">Procurar Medico</a></li>
            <li><a href="#">Procurar Exame</a></li>           
          </ul>
        </li>
          
     
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o fa-2x" aria-hidden="true"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Minha conta</a></li>
            <li><a href="#">Editar Conta</a></li>
            <li><a href="#">Fazer Logof</a></li> 
            <li><a href="#">Ver Meus Dados</a></li>   
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     
         <!-- Icones Painel adm -->
          <div class="conteiner-fluid">
            <div class="row-fluid">                
              <div class="col-sm-12">                  
                <div class="col-sm-3" id="medico">
                    <div class="text-center">
                    <i class="fa fa-user-md fa-4x" aria-hidden="true"></i>
                        <h5>Médicos</h5>
                    </div>  
                    <hr/>
                    
                    	<p>Aqui vai ser o total a ser exibido</p>
                    	
                   
                 </div>    
                  <div class="col-sm-3" id="clinica">                      
                       <div class="text-center">
                    <i class="fa fa-hospital-o fa-4x" aria-hidden="true"></i>
                        <h5>Clínicas</h5>
                    </div>  
                    <hr/>
                    <p>Aqui vai ser o total a ser exibido</p> 
                  </div>
                  <div class="col-sm-3" id="paciente">                  
                    <div class="text-center">
                    <i class="fa fa-user-o fa-4x" aria-hidden="true"></i>
                        <h5>Pacientes</h5>
                    </div>                     
                    <hr/>  
                   <p>Aqui vai ser o total a ser exibido</p>               
                  </div>
                </div>
              </div>     
          </div>          
         <!-- // Icones Painel adm-->
     
         <!-- Tabelas de Medicos Presentes-->
          <section>
     <div class="container">
            <div class="row">
               <div class="col-xs-11">
                 <table class="table table-bordered table-hover">  
                    <thead>
                     <tr><th class="text-center" colspan="5">Médicos Presentes</th></tr>
                    </thead>
                     <tbody>                            
                        <tr>
                            <td>Nome</td>
                            <td>CRM</td>
                            <td>Status</td>  
                            <td>Ações</td>
                            <td>Pacientes</td>
                           
                       </tr>
                         
                          <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>12345678</td>
                            <td>Presentes</td>
                               <td>Total Pacientes</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span>
                               </button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                        
                         <tr>
                          <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>12345678</td>
                            <td>Presentes</td>
                               <td>Total Pacientes</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span>
                               </button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                        
                           <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>12345678</td>
                            <td>Presentes</td>
                               <td>Total Pacientes</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span>
                               </button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                        
                          <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>12345678</td>
                            <td>Presentes</td>
                               <td>Total Pacientes</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span>
                               </button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                            
                        </tbody>
                       
                       
     
                        
                       
              
                 
                   </table>
                </div>
            </div>  
          </div>
            </section>
     
         <!-- // Tabela de Medicos Presentes-->
     
     <!-- Tabela de Pacientes Marcados-->
         <section>
     <div class="container">
            <div class="row">
               <div class="col-xs-11">
                 <table class="table table-bordered table-hover">  
                    <thead>
                     <tr><th class="text-center" colspan="6">Pacientes Agendados</th></tr>
                    </thead>
                     <tbody>                            
                        <tr>
                            <td>Nome</td>
                            <td>Médico</td>
                            <td>Procedimento</td>  
                            <td>Status</td>
                            <td>Data/Hora</td>
                            <td>Ações</td>
                            
                       </tr>
                         
                          <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>Dr. Niguem</td>
                            <td>Ultrason</td>
                              <td>Marcado</td>
                              <td>13:30/ 05/05/17</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span></button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                         
                                <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>Dr. Niguem</td>
                            <td>Ultrason</td>
                              <td>Marcado</td>
                              <td>13:30/ 05/05/17</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span></button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                         
                               <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>Dr. Niguem</td>
                            <td>Ultrason</td>
                              <td>Marcado</td>
                              <td>13:30/ 05/05/17</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span></button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                         
                              <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>Dr. Niguem</td>
                            <td>Ultrason</td>
                              <td>Marcado</td>
                              <td>13:30/ 05/05/17</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span></button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                         
                              <tr>
                            <td>Dyego Dos Santos Barros</td>
                            <td>Dr. Niguem</td>
                            <td>Ultrason</td>
                              <td>Marcado</td>
                              <td>13:30/ 05/05/17</td>
                              <td>
                              <button type="button" class="btn btn-danger">Excluir
                               <span class="glyphicon glyphicon-remove"></span></button>
                                <button type="button" class="btn btn-warning">Editar
                                 <span class="glyphicon glyphicon-pencil"></span>
                                 </button>
                                  <button type="button" class="btn btn-success">Salvar
                                  <span class="glyphicon glyphicon-ok"></span>
                                  </button>
                              </td>
                       </tr>
                         
                         
                            
                        </tbody>
                       
                       
     
                        
                       
              
                 
                   </table>
                </div>
            </div>  
          </div>
            </section>
     
     <!-- //Tabela de Pacientes Marcados-->
        
  <footer>
     <div class="conteiner">
         <div class="row">
          <div class="col-sm-10">
             <strong  class="footer-descricao">Informações sobre a empresa</strong> 
             </div>
             <div class="col-sm-2">
                 <small class="footer-descricao">Desenvolvido por</small><br/>
                 <strong class="footer-descricao">Dyego Barros</strong>
             </div>
         
         </div>
         </div>
     </footer>
     
     <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>
</body>    

</html>
