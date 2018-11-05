<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
         include "conecta.php";
         include "extensao.php";
         ?>
      <script>
         function troca(){
         
                if(document.getElementById("botao").value=='Editar'){
               document.getElementById("nome").disabled = false; // Habilitar
               document.getElementById("valor").disabled = false; // Habilitar                                     
               document.getElementById("botao").value = 'Salvar';
               document.getElementById("excluir").disabled = true; // Habilitar
         }
         else{
         document.formulario.submit();
         }
         }
         
         
      </script>
   </head>
   <body>
      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      <?php
         $vcodigo=$_GET["codigo"];
         
         $sql = "SELECT * FROM servico WHERE idservico='$vcodigo'";
         
               $editar = mysqli_query($con,$sql);
               list($vcodigo,$vnome,$vvalor) = mysqli_fetch_row($editar);                                    
           ?>
           
      <!-- Horizontal Layout -->
      <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Edição de Serviços
                  </h2>
               </div>
               
               <div class="body">
                  <form class="form-horizontal" name="formulario"  action="../atualiza/atualizarservico"  method="POST" role="form">
                     <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Código</label>
                        </div>
                                                
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
								 <input type="text" name="codigo1" value=<?php echo $Vcodigo ?> disabled>	
                                 <input type="hidden" name="codigo" class="form-control" value="<?php echo $Vcodigo?>">
                              </div>
                           </div>
                        </div>
                     </div>
                                                                                    
                     <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Nome do Serviço</label>
                        </div>                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
 <input type="text" id="nome" name="nome" class="form-control" placeholder="Informe o nome do serviço"value="<?php echo $Vnome?>"disabled>
                              </div>
                           </div>
                        </div>
                     </div>

                                   <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Valor do Serviço</label>
                        </div>                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
 <input type="text" id="valor" name="valor" class="form-control" placeholder="Informe o valor do serviço"value="<?php echo $Vvalor?>"disabled>
                              </div>
                           </div>
                        </div>
                     </div>

             
                     <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                        
 <input type="button"  id="botao" value= "Editar" class="btn btn-success btn-lg waves-effect" onclick="troca()"></button>
 
						   <a href="<?php echo "../excluir/excluirservico?codigo=$Vcodigo";?>">
						   
<input type="button"  id="excluir" value= "Excluir" class="btn btn-danger btn-lg waves-effect" onclick="troca()"></button>
						   </a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>